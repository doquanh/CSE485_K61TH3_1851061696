<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../form_login.php?error= moi dang nhap");
 } ?>
<?php 

$ten_the_loai = $_POST['ten_the_loai'];

require_once('../connect.php');
$sql = "INSERT INTO the_loai(ten_the_loai) VALUES ('$ten_the_loai')";
mysqli_query($connect,$sql);
mysqli_close($connect);

header("location:../the_loai/");
 ?>