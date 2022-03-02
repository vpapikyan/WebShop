<?php
session_start();

if(isset($_COOKIE['admin'])){
	$_SESSION['admin'] = true;
}

if(isset($_SESSION['admin'])){
	header("location:home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="styles/fonts.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>


	<form class="form" method="post" action="check.php">
		<?php if(isset($_SESSION['error'])){ ?>
	
		<font color="red">
			Username and/or password is incorrect!
		</font><br><br>
		<?php  unset($_SESSION['error']); } ?>

		<input placeholder="Username" type="text" name="username">
		<input placeholder="Password" type="password" name="password">
		<label>
		<input type="checkbox" name="save">
		Stay in system
		</label>
		<button>Sign In</button>
	</form>




<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>