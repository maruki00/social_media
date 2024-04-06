<?php

/*
CREATE TABLE `sn`.`user` ( 
							`id` INT(11) NOT NULL AUTO_INCREMENT ,
							 `n_usr` VARCHAR(255) NOT NULL , 
							 `n_email` VARCHAR(255) NOT NULL ,
							  `n_password` VARCHAR(255) NOT NULL ,
							   `n_city` VARCHAR(255) NOT NULL , 
							   PRIMARY KEY (`id`(11))
	) ENGINE = InnoDB;
*/


$host = 'localhost';
$user = 'root';
$pwd = 'root';
$dbName="sn";
session_start();
mysql_connect($host,$user,$pwd)or die("Connection Failed ...");
mysql_select_db($dbName) or die("Connection Error ...");

?>