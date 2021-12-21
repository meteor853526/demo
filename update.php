<?php

//update.php

include('database_connection.php');

if($_POST["name"] == '選課代號'){
  $query = "
  UPDATE db_table_course , table2
  SET db_table_course.".$_POST["name"]." = ".$_POST["value"].", table2.".$_POST["name"]." = ".$_POST["value"]."
  WHERE db_table_course.選課代號 = ".$_POST["pk"]." AND  table2.選課代號 = ".$_POST["pk"]."
  ";
}
if($_POST["name"] == '開課單位' || $_POST["name"] == '開課人數' || $_POST["name"] == '已收授人數' || $_POST["name"] == '授課老師'){
  $org = $_POST["name"];
  $set = $_POST["value"];
  $query = "
  UPDATE db_table_course 
  SET db_table_course. $org = '$set'
  WHERE db_table_course.選課代號 = ".$_POST["pk"]. "  
  ";
}
if($_POST["name"] == '課程名稱' || $_POST["name"] == '開課班級' || $_POST["name"] == '學分數' || $_POST["name"] == '必選修'){
  $org = $_POST["name"];
  $set = $_POST["value"];
  $query = "
  UPDATE table2
  SET table2. $org = '$set'
  WHERE table2.選課代號 = ".$_POST["pk"]." 
  ";
}

$result = $connect->query($query);
if (!$result) {
    die($conn->error);
  }
print_r($result);
?>