<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../login.html?error= moi dang nhap");
 }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bgr_admin.css">

</head>
<body>
<?php 

require_once('../connect.php');
$ma_admin= $_SESSION['ma_admin'];
$sql = "select * from bai_viet join admin on bai_viet.ID_nguoi_dung=admin.ma_admin";


$result = mysqli_query($connect,$sql);

?>



<button><a href="../../admin/index.php">Menu</a></button>
<table border="1" width="100%">
	<tr>
		<th>IDuser</th>
		<th>Detail</th>
		<th>Image</th>
		
		<th>Delete</th>
	</tr>
	<?php foreach ($result as $each) :?>
		<tr>
			<td> 
				<?php echo $each['ma_admin'] ?>
			</td>
			<td> 
				<?php echo $each['noi_dung'] ?>
			</td>

			<td>
				<img src="<?php echo $each['png'] ?>" height='200' >
			</td>
			
			
			
			<td>
				<a href="delete.php?ID_bai_viet=<?php echo $each['ID_bai_viet'] ?>">Xóa</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<?php mysqli_close($connect); ?>

</body>
</html>