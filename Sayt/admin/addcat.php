<?php
include("conf/connect.php");
$am = $_POST['am'];
$ru = $_POST['ru'];
$en = $_POST['en'];

$DB->query("INSERT INTO cat (`am_name`,`ru_name`,`en_name`) VALUES ('$am','$ru','$en')");
header("location:home.php");