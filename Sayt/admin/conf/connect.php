<?php

$DB = @new mysqli("localhost","root","","shop");
if($DB -> connect_error){
	echo "Connection error!";
	die();

}else {
	mysqli_set_charset($DB,"utf8");
}