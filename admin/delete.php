<?php
session_start();
$id =  $_GET['userid'];

$db = mysqli_connect("localhost", "root", "", "random");
$sql = "delete from danhsachtaikhoan where userName = '$id'";
echo "$id";
mysqli_query($db, $sql);
$thongbao = 'Xóa Thành Công';
$_SESSION['thongbao'] =  $thongbao;
header("location:index.php");

?>
