<?php
session_start();

function login($username, $password) {
    // gia su la login thanh cong, se quay lai sau --> gio quay lai
    // $_SESSION['user'] = $username;

    $conn = connectDB();

    $sql = sprintf("SELECT password FROM user WHERE username = '%s'", $username) ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // check pass
        $row = $result->fetch_assoc();
        if($row['password'] == $password) {
            $_SESSION['user'] = $username;
            return isLogined();
        }
        else {
            return "Wrong password.";    
        }
    } else {
        return "Wrong username.";
    }

    $conn->close();
}

function isLogined() {
    return isset($_SESSION['user']);
}

function logout() {
    unset($_SESSION['user']);
}

function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo_db5";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>