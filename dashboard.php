<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: adminlogin.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: adminlogin.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-size: 30px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #5F9EA0;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color:#5F9EA0;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color:white;
  color: black;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <p> <a href="adminlogin.php?logout='1'" style="color:;">LOG OUT</a> </p>
</div>

	
</head>
<div class="header">
		<h2>DASHBOARD</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			
		<?php endif ?>
	</div>
		
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>


<!DOCTYPE html>
<html>
<head>

<style>
a {text-align:center;}
.block {
  display: block;
  width: 50%;
  border: none;
 
  color: gold;
  padding: 14px 28px;
  font-size: 25px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color:gold;
  color: black;
}
body {background-image: url(BG.jpg); 
background-size:cover;
}
img{display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
a {color:black; font-family:castellar;}
.button {
	float: right ;
	margin-top:30px;
	transform: translate(-10%, -10%); 
}
.btn {
	border: 1px solid;
	padding: 30px 50px;
	color: white;
	font-family: Arial;
	
	background-color: gold;
}
</style>
</head>
<body>

<br>
<br>
<center> <img src="logo.png" style="width:1000px; height="1000px;"> </center>


<center>
<br>
<button class="block" name="button"><a href="adminindex.php"> USER MAINTENANCE </a> </button><br>
<br>
<button class="block" name="button"><a href="sindex.php"> STUDENT MAINTENANCE </a> </button> <br>  </center>

</body>
</html>