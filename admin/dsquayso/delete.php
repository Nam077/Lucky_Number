<?php
session_start();
$id =  $_GET['userid'];

$db = mysqli_connect("localhost", "root", "", "random");
$sql = "delete from ds_quay_so where SoMayMan = '$id'";
echo "$id";
mysqli_query($db, $sql);
$thongbao = 'Xóa Thành Công';
$_SESSION['thongbao'] =  $thongbao;
echo "<script> window.location.href = 'http://localhost/vqmm/admin/dsquayso.php'; </script>";

?>
