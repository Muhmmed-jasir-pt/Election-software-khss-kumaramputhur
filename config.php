<?php

$dbhost='localhost';
$dbusername='root';
$dbpass='';

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass);
$sql="CREATE DATABASE IF NOT EXISTS election";
mysqli_query($mysqli,$sql);
if (!$mysqli) {
	die("Sorry,failed to connect server".mysqli_connect_error());
}
?>