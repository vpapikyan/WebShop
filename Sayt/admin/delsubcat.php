<?php
include("conf/connect.php");
$id = $_GET['id'];
$DB->query("DELETE FROM subcat WHERE id=$id");
header("location:subcategories.php");