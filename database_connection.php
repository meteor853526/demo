<?php

//database_connection.php
$dsn = "mysql:dbname=class_demo;host=localhost;port=3306";
$username = "test";
$password = "classdemo";

$connect = new PDO($dsn, $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$connect->query('SET NAMES utf8');
?>
