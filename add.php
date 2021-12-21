<?php
include('database_connection.php');

$data1 = $_POST['add1'];
$data2 = $_POST['add2'];
$data3 = $_POST['add3'];
$data4 = $_POST['add4'];
$data5 = $_POST['add5'];
$data6 = $_POST['add6'];
$data7 = $_POST['add7'];
$data8 = $_POST['add8'];
$data9 = $_POST['add9'];

$query1 = "INSERT INTO db_table_course (選課代號,開課單位,開課人數,已收授人數,授課教師) 
VALUES ('$data1','$data6','$data7','$data8','$data9')";



$query2 = "INSERT INTO table2 (選課代號,課程名稱,開課班級,學分數,必選修)
VALUES ('$data1','$data2','$data3','$data4','$data5')";
$result1 = $connect->query($query1);
$result2 = $connect->query($query2);
if (!$result1) {
    die($conn->error);
}
print_r("選課代號重複");
if (!$result2) {
    die($conn->error);
}
print_r("選課代號重複");

header("Location: index.html");
?>