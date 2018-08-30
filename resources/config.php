<?php

//uzupełnić
$mysql_host = 'localhost'; 
$port = '3306'; 
$username = '';
$password = '';
$database = ''; 
$img_table = '';

$create_database = "CREATE DATABASE IF NOT EXISTS `".$database."`";
$create_table = "CREATE TABLE IF NOT EXISTS `".$database."`.`".$img_table."` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `ext` VARCHAR(20) NOT NULL , `img` MEDIUMBLOB NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";


try{
	$con = new PDO('mysql:host='.$mysql_host.';port='.$port, $username, $password );
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->exec($create_database);
    
    $con = new PDO('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
    $con->exec($create_table);
    
} catch(PDOException $e){
    
    $error = $e->getMessage();
    echo $error;
    die();
	
}