CREATE TABLE `nav` (
	`lay_id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`lay_name` VARCHAR(10) NULL,
	`lay_url` VARCHAR(20) NULL,
	`lay_order` TINYINT(5) NULL,
	`lay_show` TINYINT(2) NOT NULL
);
