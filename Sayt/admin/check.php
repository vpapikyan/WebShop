<?php 
session_start();
include("conf/connect.php");
$username = $_POST['username'];
$password = $_POST['password'];

$res = $DB->query("SELECT * FROM `admin` ");
$arr = mysqli_fetch_assoc($res);



if($username==$arr['username'] && $password==$arr['password']){
	$_SESSION['admin'] = true;
	if(isset($_POST['save'])){
		setcookie('admin',true,time()+60*60*24*31);
	}
	header("location:home.php");
}else {
	$_SESSION['error'] = true;
	header("location:index.php");
}