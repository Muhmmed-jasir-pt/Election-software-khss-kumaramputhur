<?php
include "config.php";
if (isset($_POST['fbtn'])) {
$c_goti=$_POST['c_classok'];
session_start();
$_SESSION['varname']=$c_goti;
}
header("location:vtport.php")
?>