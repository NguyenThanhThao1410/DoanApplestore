<?php
// include('3_session.php');
// include_once('3_session.php');
require_once('session.php');
if (isset($_REQUEST['txtName']) && isset($_REQUEST['txtPass'])) {
    $test = login($_REQUEST['txtName'], $_REQUEST['txtPass']);
    echo $test;
}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle 1.css">
</head>
<body>
<?php
if (isLogined()) {
  header("Location: Admin Dashboard Panel/index.php"); 
  exit();
}
else {
?>
<form action="login1.php" method="post" name="frm1">
<div class="login-box">
  <h2>Login</h2>
  <form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
    <div class="user-box">
      <input type="text" name="txtName" value=""/>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="txtPass" value=""/>
      <label>Password</label>
    </div>
	  <div class= "sub">
	  <input name="btnSubmit" type="submit" value="Submit"/>
    <div id="dont">
    <a href="dangki.html" target="_blank">Don't have account?</a>
      </div>
	  </div>
    <!--<a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      
    </a>-->

  </form>
</div>
</form>
<?php
}
?>

<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</body>
</html>