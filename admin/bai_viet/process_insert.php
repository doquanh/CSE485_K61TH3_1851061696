<?php
$tieu_de = $_POST['tieu_de'];
$tom_tat = $_POST['tom_tat'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

$ID_nguoi_dung= $_POST['ID_nguoi_dung'];
require('../../connect.php');
$sql="insert into bai_viet(tieu_de,tom_tat,noi_dung,anh,ID_nguoi_dung) values('$tieu_de','$tom_tat','$noi_dung','$anh','$ID_nguoi_dung')";



mysqli_query($connect,$sql);
mysqli_close($connect);
?>
