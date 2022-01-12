<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../form_login.php?error= moi dang nhap");
 } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm Thể Loại</title>
	<link rel="stylesheet" type="text/css" href="../demo_login.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
	<h1>Add Name</h1>
		<form class="form" action="process_insert_the_loai.php" method="post">
			<input type="text" name="ten_the_loai" placeholder="Name">
		


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

