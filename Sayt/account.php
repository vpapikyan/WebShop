<?php 
if(!isset($_COOKIE['user'])){
	header("location:sign.php");
	die();
}else {
	$uid = $_COOKIE['user'];
	
}
include("header.php");
$query = $DB->query("SELECT * FROM `users` WHERE id='$uid'");
	$userinfo = mysqli_fetch_assoc($query); ?>
			<h1>Dashboard - <?=$userinfo['name']?><h1>
<?php include("footer.php"); ?>