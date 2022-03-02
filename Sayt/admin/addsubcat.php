<?php
include("conf/connect.php");
$cid = $_POST['cid'];
$am = $_POST['am'];
$ru = $_POST['ru'];
$en = $_POST['en'];

$DB->query("INSERT INTO subcat (`cid`,`am_name`,`ru_name`,`en_name`) VALUES ('$cid','$am','$ru','$en')");
header("location:subcategories.php");