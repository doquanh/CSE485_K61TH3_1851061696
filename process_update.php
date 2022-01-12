<?php 
	$ma_admin = $_POST['ma_admin'];
	$ten_admin = $_POST['ten_admin'];
	$mat_khau = $_POST['mat_khau'];
	$email = $_POST['email'];
	

 require_once('connect.php');


	 $sql ="update admin set
	 ten_admin = '$ten_admin',
	 email= '$email',
	 mat_khau = '$mat_khau'

	 where 
	 ma_admin = '$ma_admin'";
 mysqli_query($connect,$sql);
 mysqli_close($connect);
header("location:try.php");