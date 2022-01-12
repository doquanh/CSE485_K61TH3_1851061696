<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../form_login.php?error= moi dang nhap");
 } ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../demo_login.css">
</head>
<body>
<?php 
$ma_the_loai = $_GET['ma_the_loai'];
require_once('../connect.php');
$sql= "select *from the_loai where ma_the_loai = '$ma_the_loai'";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result) ?>
<div class="wrapper">
	<div class="container">
		<form class="form" action="process_update.php" method="post">
			<input type="hidden" name="ma_the_loai" value="<?php echo $each['ma_the_loai'] ?>">
			<h1>Fix Name</h1>
			<input type="text" name="ten_the_loai" value ="<?php echo $each['ten_the_loai']  ?>">
			
			<button>Fix</button>
			
		</form>

	</div>
</div>	
<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</body>
</html>