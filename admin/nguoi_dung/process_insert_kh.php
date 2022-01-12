<?php 
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$cap_do =$_POST['cap_do'];

require_once('../connect.php');
$sql = "insert into account_g(name,password,email,cap_do) value ('$name','$password','$email','$cap_do')";
 
mysqli_query($connect,$sql);
mysqli_close($connect);

 ?>