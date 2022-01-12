<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../login.html?error= moi dang nhap");
 } ?>
<?php 
$ID_bai_viet= $_GET['ID_bai_viet'];

require'../connect.php';
$sql = "delete from bai_viet where ID_bai_viet='$ID_bai_viet'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header("location:../tin_tuc");
 ?>