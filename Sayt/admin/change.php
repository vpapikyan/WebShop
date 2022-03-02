<?php
include("conf/connect.php");
 $username = mysqli_real_escape_string($_POST['username']);
 $old = mysqli_real_escape_string($_POST['old']);
 $new = mysqli_real_escape_string($_POST['new']);

 $DB->query("UPDATE `admin` SET username='$username'");
 



?>

