<?php
include('database_connection.php');
$id = $_POST["選課代號"];
$ta = "table2";
$query = "DELETE db_table_course ,table2 FROM db_table_course INNER JOIN table2 ON db_table_course.選課代號 = table2.選課代號 and db_table_course.選課代號 = $id";


$result = $connect->query($query);
if (!$result) {
    die($conn->error);
  }
print_r($result);


?>