<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../form_login.php?error= moi dang nhap");
 } ?>
<?php 
$ma_the_loai = $_GET['ma_the_loai'];
require'../connect.php';
$sql = "delete from the_loai where ma_the_loai = '$ma_the_loai'";
 
mysqli_query($connect,$sql);
mysqli_close($connect) ; 
header("location:../the_loai/");
?>