<?php 
$email = $_POST['email'];
$mat_khau= $_POST['mat_khau'];


require'connect.php' ;
$sql = "select * from admin where email='$email' and mat_khau='$mat_khau'";
$result = mysqli_query($connect,$sql);
//dem so ng trung vs email va mk da dien
$count = mysqli_num_rows($result);
//trung or ko trung
if ($count==1) {

	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['ma_admin']=$each['ma_admin'];
	$_SESSION['ten_admin']=$each['ten_admin'];
	$_SESSION['cap_do']=$each['cap_do'];

	header("location:index.php");

}else{
	header("location:login.html?error=dang nhap sai");
}