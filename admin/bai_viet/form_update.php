<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../form_login.php?error= moi dang nhap");
 } ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../demo_login.css">
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$ID_bai_viet=$_GET['ID_bai_viet'];
	require '../connect.php';
	$sql = "select * from the_loai";
	$array_the_loai = mysqli_query($connect,$sql);	

	$sql ="select * from bai_viet";
	$result =mysqli_query($connect,$sql);
	$each= mysqli_fetch_array($result);

	 ?>
<div class="wrapper">
	<div class="container">
<form class="form" action="process_update.php" method="post">
	<input type="hidden" name="ID_bai_viet" value='<?php echo $each['ID_bai_viet'] ?>'>
	
	<input name="noi_dung" value="<?php echo $each['noi_dung'] ?>">

	
 	
 	
	
	
	<button>Accept</button>
</form>
</div>
</div>
</body>
</html>