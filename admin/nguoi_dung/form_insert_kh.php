<!DOCTYPE html>
<html>
<head>
	<title>Thêm Thông Tin Khách Hàng</title>
</head>
<link rel="stylesheet" type="text/css" href="css/demo_login.css">
<body>
	<form action="process_insert_kh.php" method="POST">
		Tên Khách Hàng
		<input type="text" name="name"><br>
		Mat khau
		<input type="password" name="password"><br>
		Email
		<input type="Email" name="email"><br>
		Cấp độ
		<input type="radio" name="cap_do" value="1" >Free
		<input type="radio" name="cap_do" value="0" checked>Premium
		<br>
		<button>Thêm</button>


	</form>

</body>
</html>