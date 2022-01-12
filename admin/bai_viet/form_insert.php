<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../form_login.php?error= moi dang nhap");
 }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../demo_login.css">
</head>
<body>
	<?php 
	
	require '../connect.php';
	$sql = "select * from the_loai";
	$array_the_loai = mysqli_query($connect,$sql);	
	 ?>
<div class="wrapper">
	<div class="container">
		<form class="form" action="process_insert.php" method="post">
			<h1>Add Posts</h1>
			<input type="text" name="tieu_de" placeholder="Title">
			<input type="text" name="tieu_de" placeholder="Title">
			<input type="text" name="tom_tat" placeholder="Summary">
			<input type="text" name="noi_dung" placeholder="Content">
			<input type="text" name="anh" placeholder="Image">



			<select name="ma_the_loai">
				<?php foreach ($array_the_loai as $the_loai): ?>
					<option value="<?php echo $the_loai['ma_the_loai'] ?>"> 
					<?php echo $the_loai['ten_the_loai'] ?>
				</option>
				<?php endforeach ?>
				
			</select>
			<input type="hidden" name="ma_admin" value="<?php echo $_SESSION['ma_admin'] ?>">
			<br>
			<input type="hidden" name="tinh_trang" value="0">
			<button>Add</button>
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