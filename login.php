<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<img src="logo.png">
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>LoG-IN</h2>
	</div>
	
	<form method="post" action="adminlogin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
	<a href="adminregister.php">+Admin</a>
		</p>
	</form>


</body>
<style>
	body {
		color: blue;
		background-image: url(BG.jpg);
		font-family: 'Roboto', sans-serif;
		background-size: cover;
	}
	img{display:block;
  	margin-left: auto;
  	margin-right: auto;
  	width: 30%;}

}
	
</style>
</html>