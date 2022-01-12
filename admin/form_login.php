<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="demo_login.css">
</head>
<body>
	<?php 
	if(isset($_GET['error'])){
		$error =$_GET['error'];
		echo $error;
	} 
	?>
	
<div class="wrapper">
	<div class="container">
		<h1>welcome</h1>
		
		<form class="form" action="process_login.php" method="post">
			<input type="text" name="email" placeholder="Username" required>
			<input type="password" name="mat_khau" placeholder="Password" required>
			<button type="submit" id="login-button">Login</button>
		</form>
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
</div>

</body>
</html> 
</form>
</body>
</html> 