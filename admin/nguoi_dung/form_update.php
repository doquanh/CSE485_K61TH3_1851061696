<!DOCTYPE html>
<html>
<head>
	<title>Thêm Thông Tin Khách Hàng</title>
	
</head>
<link rel="stylesheet" type="text/css" href="../demo_login.css">
<body>
<?php 
$ma_admin = $_GET['ma_admin'];
require_once('../connect.php');
$sql = "select * from admin where ma_admin = '$ma_admin'";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result);

?>
<div class="wrapper">
		<div class="container">
	<form action="process_update.php" method="POST">
		<input type="hidden" name="ma_admin" value="<?php echo $each['ma_admin'] ?>">
		Tên Khách Hàng
		<input type="text" name="ten_admin" value="<?php echo $each['ten_admin'] ?>">
		<br>
		Mat khau
		<input type="text" name="mat_khau" value="<?php echo $each['mat_khau'] ?>">
		<br>
		Email
		<input type="Email" name="email" value="<?php echo $each['email'] ?>">
		<br>
		
		<button>Sửa
		</button>


	</form>
</div>
</div>

</body>
</html>

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