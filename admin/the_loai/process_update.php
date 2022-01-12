<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../login.html?error= moi dang nhap");
 } ?>
<?php 
$ma_the_loai = $_POST['ma_the_loai'];
$ten_the_loai = $_POST['ten_the_loai'];
require_once('../connect.php');
$sql = "update the_loai set
ten_the_loai= '$ten_the_loai'
where ma_the_loai = '$ma_the_loai'
";
mysqli_query($connect,$sql);
mysqli_close($connect);
header("location:../the_loai/");
 ?>
