<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../login.html?error= moi dang nhap");
 }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manager User</title>
	<link rel="stylesheet" type="text/css" href="../bgr_admin.css">
</head>
<body>
<?php 
require_once('../connect.php');
$sql = "select * from admin";
$result = mysqli_query($connect,$sql);
?>

<button><a href="../../admin/index.php">Menu</a></button>
<table border="1" width="100%">
	<tr>
		
		<th>Tên Khách Hàng</th>
		<th>Email</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $each ): ?>
		<tr>
			<td>
				<?php echo $each['ten_admin'] ?>
			</td>
			<td>
				<?php echo $each['email'] ?>
			</td>
			
			<td>
				<a href="form_update.php?ma_admin=<?php echo $each['ma_admin'] ?>">Sửa</a>
			</td>
			<td>
				<a href="delete.php?ma_admin=<?php echo $each['ma_admin'] ?>">Xóa</a>
			</td>
		</tr>
	<?php endforeach ?>
	</table>
<?php mysqli_close($connect); ?>
</body>
</html>