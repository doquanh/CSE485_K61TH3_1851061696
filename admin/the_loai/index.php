<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../form_login.php?error= moi dang nhap");
 } ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bgr_admin.css">
	<link rel="stylesheet" type="text/css" href="../bgr_admin4.css">
</head>
<body>
<?php 
require_once('../connect.php');
$sql = "select * from the_loai";

$result = mysqli_query($connect,$sql);

?>
<button><a href="form_insert_the_loai.php">Thêm</a></button>
<button><a href="../">Menu</a></button>
<table border="1" width="100%">
	<tr>
		<th>Tên Thể Loại</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $each) :?>
		<tr>
			<td> 
				<?php echo $each['ten_the_loai'] ?>
			</td>
			<td>
				<a href="form_update_the_loai.php?ma_the_loai=<?php echo $each['ma_the_loai'] ?>">Sửa</a>
			</td>
			<td>
				<a href="delete.php?ma_the_loai=<?php echo $each['ma_the_loai'] ?>">Xóa</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<?php mysqli_close($connect); ?>
</body>
</html>