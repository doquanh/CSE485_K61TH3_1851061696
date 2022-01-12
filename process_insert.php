<?php

$tinh_trang = $_POST['tinh_trang'];
$noi_dung = $_POST['noi_dung'];
$png = $_POST['png'];
$the_loai=$_POST['the_loai'];
$ma_admin= $_POST['ma_admin'];
require('connect.php');
$sql="insert into bai_viet(noi_dung,the_loai,tinh_trang,png,ID_nguoi_dung) values('$noi_dung','$the_loai','$tinh_trang','$png','$ma_admin')";



mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:try.php')
?>
