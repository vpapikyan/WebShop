<?php

session_start();
unset($_SESSION['admin']);
setcookie("admin",true,time()-1);
header("location:index.php");