<?php 
$ten_admin = $_POST['ten_admin'];
$mat_khau = $_POST['mat_khau'];
$email = $_POST['email'];
$cap_do =$_POST['cap_do'];
$sdt=$_POST['sdt'];

require_once('../connect.php');
$sql = "insert into admin(ten_admin,email,mat_khau,cap_do,sdt) value ('$ten_admin','$email','$mat_khau','$cap_do','$sdt')";
 
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:../login.html')
 ?>