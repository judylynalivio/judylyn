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
		<h2>Register</h2>
	</div>
	
	<form method="post" action="adminregister.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Admin already? <a href="adminlogin.php">Sign in</a>
		</p>
	</form>
</body>

<style>
	body {
		color: black;
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