CREATE DATABASE `demo_db1` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use demo_db1;

CREATE TABLE IF NOT EXISTS `admin` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(100) NOT NULL,
	`password` VARCHAR(100) NOT NULL,
	`email` VARCHAR(100) NOT NULL UNIQUE,
	`phone` VARCHAR(100) NOT NULL UNIQUE,
) ENGINE = InnoDB;

INSERT INTO admin(name, password, email, phone) 
VALUES ('Phạm Thành Tài', 'taipham@gmail.com', '0912345678')