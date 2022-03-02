<?php
session_start();
include("conf/connect.php");
if(!isset($_SESSION['admin'])){
	header("location:index.php");
	die();
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


<header>
	Control Panel
</header>
<nav>
	<a href="home.php">Categories</a>
	<a href="subcategories.php">Subcategories</a>
	<a href="newproduct.php">New Product</a>
	<a href="products.php">Products</a>
	<a href="users.php">Users</a>
	<a href="messages.php">Messages</a>
	<a href="security.php">Security</a>
	<a href="exit.php">Exit</a>
</nav>
<main>