<?php
header("Content-Type: application/json");
//fetch.php

include('database_connection.php');

$column = array("選課代號", "課程名稱", "開課班級", "學分數", "必選修",
                "開課單位", "開課人數", "已收授人數", "授課教師");

$query = "SELECT * FROM db_table_course INNER JOIN table2 ON db_table_course.選課代號 = table2.選課代號";


$result = $connect->query($query);
$data = array();
while( $row = $result->fetch(PDO::FETCH_ASSOC) ){ 

	$data[] = array('選課代號'=>$row['選課代號'],'課程名稱'=>$row['課程名稱'],'開課班級'=>$row['開課班級'],'學分數'=>$row['學分數'],'必選修'=>$row['必選修'],
					'開課單位'=>$row['開課單位'],'開課人數'=>$row['開課人數'],'已收授人數'=>$row['已收授人數'],'授課教師'=>$row['授課教師']);
	
	
  } 
  
  $total_records = $result->rowCount();
  


$output = array(
	'data'		=>	$data
);

echo json_encode($output,JSON_UNESCAPED_UNICODE);

?>