<?php
session_start();
if(empty($_SESSION['ma_admin'])){
	header("location:../login.html?error= moi dang nhap");
 } ?>
<?php  
$ID_bai_viet = $_POST['ID_bai_viet'];
$noi_dung = $_POST['noi_dung'];

require'../connect.php';
$sql="update bai_viet set
noi_dung='$noi_dung',


tinh_trang=1
where
ID_bai_viet='$ID_bai_viet'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
?>
