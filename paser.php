<?php
include("config.php");
$kor='jasir@##cd';
if (isset($_POST['fbtn']))
{
	$kir=$_POST['ad_no'];
}
if ($kor===$kir) {
	header("location:sum.php");
}else{
	echo "INCORRECT PASSWORD ATTEMPT ";
}
?>