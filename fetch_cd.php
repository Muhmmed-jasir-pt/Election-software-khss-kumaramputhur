<?php
include("config.php");
if (isset($_POST['fbtn'])) {
	$c_name=$_POST['c_name'];
	$ad_no=$_POST['ad_no'];
	$cd=$_POST['cptn'];
	$c_class=$_POST['c_class'];
	$file=$_FILES['file'];
	$filename=$_FILES['file']['name'];
	$filetmpname=$_FILES['file']['tmp_name'];
	$filesize=$_FILES['file']['size'];
	$fileerror=$_FILES['file']['error'];
	$filetype=$_FILES['file']['type'];
	$fileext=explode('.', $filename);
	$fileactualext=strtolower(end($fileext));
	$allowed=array('jpg','jpeg');
	if (in_array($fileactualext,$allowed)) {
		if ($fileerror===0) {
			if ($filesize<5000000) {
				$newfilename=uniqid('',true).".".$fileactualext;
				$filedestin=$newfilename;
				move_uploaded_file($filetmpname, $filedestin);
			}else{
				echo "File size is too big";
			}
		}else
		{
			echo "Error while uploading the file";
		}
	}
	else{
		echo "Please upload images of following format (jpg/jpeg)...";
	}
	mysqli_select_db($mysqli,"election");
    $ctabl="CREATE TABLE IF NOT EXISTS $c_class(cptn int(10),adm_no int(15) ,name VARCHAR(30),photo VARCHAR(60))";
    $resctb=mysqli_query($mysqli,$ctabl);
    $ctabl1="CREATE TABLE IF NOT EXISTS t1(ad_no int PRIMARY KEY ,vt_cnt int(15) ,name VARCHAR(30))";
    $resctb1=mysqli_query($mysqli,$ctabl1);
    $ctabl2="CREATE TABLE IF NOT EXISTS t2(ad_no int PRIMARY KEY ,vt_cnt int(15) ,name VARCHAR(30))";
    $resctb2=mysqli_query($mysqli,$ctabl2);
    $ctabl3="CREATE TABLE IF NOT EXISTS t3(ad_no int PRIMARY KEY ,vt_cnt int(15) ,name VARCHAR(30))";
    $resctb3=mysqli_query($mysqli,$ctabl3);
    $ctabl4="CREATE TABLE IF NOT EXISTS t4(ad_no int PRIMARY KEY ,vt_cnt int(15) ,name VARCHAR(30))";
    $resctb4=mysqli_query($mysqli,$ctabl4);
    $drp="DELETE FROM  $c_class WHERE adm_no = $ad_no";
    $rre=mysqli_query($mysqli,$drp);
    $drp1="DELETE FROM  $c_class WHERE cptn = $cd";
    $rre1=mysqli_query($mysqli,$drp1);
	$qrr="INSERT INTO $c_class(cptn,adm_no,name,photo) VALUES ('$cd','$ad_no','$c_name','$newfilename')";
	$res=mysqli_query($mysqli,$qrr);
    header("Location:popup.php");
    exit();

}
?>