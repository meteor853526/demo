<?php

//database_connection.php
$dsn = "mysql:dbname=csv_db 6;host=localhost;port=3306";
$username = "root";
$password = "";

$connect = new PDO($dsn, $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$connect->query('SET NAMES utf8');
?>