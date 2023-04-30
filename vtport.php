<?php
include "config.php";
    session_start();
    $c_goti=$_SESSION['varname'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #063970;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */

.select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 2px solid #04AA6D;
  border-radius: 10px;
  background: #f1f1f1;
  outline: none;
}
.select:focus,
.select:hover{
  outline: none;
  border:3px solid #04AA6D;
}
.select option{
  background: #ffffff;
}
/* Full-width input fields */

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 2px solid #04AA6D;
  border-radius: 10px;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=text]:hover, input[type=password]:hover {
  outline: none;
  border:3px solid #04AA6D;
}
.upload
{
  font-size: 16px;
  background: white;
  border-radius: 50px;
  box-shadow: 5px 5px 10px black;
  width: 100%;
  outline: none;
  margin-top: 4px;
}
::-webkit-file-upload-button{
  color: white;
  background: #04AA6D;
  padding: 15px;
  border: none;
  border-radius: 50px;
  box-shadow: 1px 0 1px 1px #6b4559;
  outline: none;
}
::-webkit-file-upload-button:hover{
  background: #1d7555;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f3f1;
  margin-bottom: 25px;
  height:2px;
  border-width:2px;
  color:yellow;
  background-color:white;

}
.ly
{
   border: 1px solid #f1f3f1;
  margin-bottom: 25px;
  margin-top: 100px;
  height:2px;
  border-width:2px;
  color:yellow;
  background-color:red; 
}

/* Set a style for the submit button */

.registerbtnc1{
  background-image: linear-gradient(#0c148d, #9699c2);
  color: white;
  padding: 16px 20px;
  margin-right: 25px;
  position: fixed;
  font-size: 32px;
  margin-left: 35%;
  border: none;
  cursor: pointer;
  width: 12%;
  border-radius: 40px;
}
      @keyframes glowinga {
        0% {
          
          box-shadow: 0 0 5px #10ff00;
        }
        50% {
          
          box-shadow: 0 0 15px #10ff00;
        }
        100% {
          
          box-shadow: 0 0 5px #10ff00;
        }
      }
.registerbtnc1 {
        animation: glowinga 1300ms infinite;
      }

.registerbtnc2 {
  background-image: linear-gradient(#0c148d, #9699c2);
  color: white;
  padding: 16px 20px;
  margin-right: 25px;
  position: fixed;
  font-size: 32px;
  margin-left: 35%;
  border: none;
  cursor: pointer;
  width: 12%;
  border-radius: 40px;
}
      @keyframes glowingb {
        0% {
          
          box-shadow: 0 0 5px blue;
        }
        50% {
          
          box-shadow: 0 0 15px blue;
        }
        100% {
          
          box-shadow: 0 0 5px blue;
        }
      }
.registerbtnc2 {
        animation: glowingb 1300ms infinite;
      }
.registerbtnc3 {
  background-image: linear-gradient(#0c148d, #9699c2);
  padding: 16px 20px;
  margin-right: 25px;
  position: fixed;
  font-size: 32px;
  margin-left: 35%;
  border: none;
  color: white;
  cursor: pointer;
  width: 12%;
  border-radius: 40px;
}
      @keyframes glowingc {
        0% {
          
          box-shadow: 0 0 5px #ff0000;
        }
        50% {
          
          box-shadow: 0 0 15px #ff0000;
        }
        100% {
          
          box-shadow: 0 0 5px #ff0000;
        }
      }
.registerbtnc3 {
        animation: glowingc 1300ms infinite;
      }
.registerbtnc4{
  background-image: linear-gradient(#0c148d, #9699c2);
  padding: 16px 20px;
  margin-right: 25px;
  position: fixed;
  font-size: 32px;
  margin-left: 35%;
  border: none;
  cursor: pointer;
    color: white;
  width: 12%;
  border-radius: 40px;
}
      @keyframes glowingd {
        0% {
          
          box-shadow: 0 0 5px #f9ff00;
        }
        50% {
          
          box-shadow: 0 0 15px #f9ff00;
        }
        100% {
          
          box-shadow: 0 0 5px #f9ff00;
        }
      }
.registerbtnc4 {
        animation: glowingd 1300ms infinite;
      }
.registerbtnc1:hover {
background-image: linear-gradient(#9659f2,#10ff00);
color: black;
}
.registerbtnc2:hover {
background-image: linear-gradient(#9659f2,blue);
color: black;
}
.registerbtnc3:hover {
background-image: linear-gradient(#9659f2,red);
color: black;
}
.registerbtnc4:hover {
background-image: linear-gradient(#9659f2,yellow);
color: black;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
p {
  color: red;
}
.dvpr  {
  color: black;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #10c482;
  text-align: center;
  margin-top: 3px;
  color: #FFFFFF;
  border-radius: 100px;
  margin-bottom: 350px;
}
h1{
  text-align: center;
  color: white;
}
h2{
  text-align: center;
  color: white;
}
.v1{
  background-color: #dddeef;
  display: flex;
  align-items: center;
  width: 49.5%;
  border-radius: 25px;
  border-width: 4px;
  height: 200px;
  margin: 1px;
  border-color: #10ff00;
  border-style: solid;
  float: left;

}
.v2{
  background-color: #dddeef;
  display: flex;
  margin: 1px;
  align-items: center;
  border-width: 4px;
  width: 49.5%;
  margin-right: 0.01px;
  height: 200px;
  border-color: blue;
  border-style: solid;
  border-radius: 25px;
  float: right;
}
.v3{
  background-color: #dddeef;
  display: flex;
  align-items: center;
  margin: 1px;
  border-width: 4px;
  width: 49.5%;
 
   border-color: #ff0000;
  border-style: solid;
   border-radius: 25px;
  height: 200px;

  float: left;
}
.v4{
  background-color: #dddeef;
  height: 200px;
   margin-right: 0.01px;
  display: flex;
  align-items: center;
  margin: 1px;
    border-color: #f9ff00;
  border-style: solid;
  border-radius: 25px;
  border-width: 4px;
  width: 49.5%;
  float: right;
}
img {



}
.i1{
border-radius: 20px;

border-style: solid;
max-height: 180px;
width: auto;
margin-left: 5px;
border-color: #063970;
}
.i2{
border-radius: 20px;
border-style: solid;
max-height: 180px;
width: auto;
margin-left: 5px;
border-color: #063970;
}
.i3{
border-radius: 20px;
border-style: solid;
max-height: 180px;
width: auto;
margin-left: 5px;
border-color: #063970;
}
.i4{
border-radius: 20px;
border-style: solid;
max-height: 180px;
width: auto;
margin-left: 5px;
border-color: #063970;
}
.yk{
  color: black;
  margin-left: 12%;
  background-color: white;
  padding: 10px;
  position: fixed;
  border-radius: 20px;

}
.yl{
  color: black;
  margin-left: 12%;
  background-color: white;
  padding: 10px;
  position: fixed;
  border-radius: 20px;
}
.ym{
  color: black;
  margin-left: 12%;
  background-color: white;
  padding: 10px;
  position: fixed;
  border-radius: 20px;
}
.yn{
  color: black;
  margin-left: 12%;
  background-color: white;
  padding: 10px;
  position: fixed;
  border-radius: 20px;
}
.itex{
  color: white;
}
</style>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>

<form action="" method="POST">
  <div class="container">
    <h1>KALLADI HSS KUMARAMPUTHUR</h1> 
    <h2> ELECTION 2022-23</h2>
    <label class="itex"><b>Admission Number</b></label>
    <input type="text" placeholder="Enter your admission number" name="admi" required >
    <br>
    <?php

mysqli_select_db($mysqli,"election");
$sqlt="SELECT * FROM $c_goti WHERE cptn=1";
$res=mysqli_query($mysqli,$sqlt);
if (mysqli_num_rows($res)>0) {
  while ($images=mysqli_fetch_assoc($res)) {?>
    <div class="v1">
    <img class="i1" src="<?=$images['photo'] ?>">
    <h3 class="yk"><?php echo $images['name'] ?></h3>
    <button type="submit" name="fbtn1" class="registerbtnc1"><b>Vote</b></button>
    </div>        <?php
  }
}
?>
<?php
$sqlt="SELECT * FROM $c_goti WHERE cptn=2";
$res=mysqli_query($mysqli,$sqlt);
if (mysqli_num_rows($res)>0) {
  while ($images=mysqli_fetch_assoc($res)) {?>
<div class="v2">
  <img class="i2" src="<?=$images['photo'] ?>">
  <h3 class="yl"><?php echo $images['name'] ?></h3>
    <button type="submit" name="fbtn2" class="registerbtnc2"><b>Vote</b></button>
    </div>
    <?php
  }
}
?>
<?php
$sqlt="SELECT * FROM $c_goti WHERE cptn=3";
$res=mysqli_query($mysqli,$sqlt);
$num=mysqli_num_rows($res);
if ($num>0) {
  while ($images=mysqli_fetch_assoc($res)) {?>
    <div class="v3">
      <img class="i3" src="<?=$images['photo'] ?>">
      <h3 class="ym"><?php echo $images['name'] ?></h3>
    <button type="submit" name="fbtn3" class="registerbtnc3"><b>Vote</b></button>
    </div>    <?php
  }
}
?>
<?php
$sqlt="SELECT * FROM $c_goti WHERE cptn=4";
$res=mysqli_query($mysqli,$sqlt);
if (mysqli_num_rows($res)>0) {
  while ($images=mysqli_fetch_assoc($res)) {?>
    <div class="v4">
      <img class="i4" src="<?=$images['photo'] ?>">
      <h3 class="yn"><?php echo $images['name'] ?></h3>
    <button type="submit" name="fbtn4" class="registerbtnc4"><b>Vote</b></button>
    </div>
<?php
  }
}
?>
<?php
    if (isset($_POST['fbtn1'])) {
      $c_ada1=0;
      $c_ada1=$_POST['admi'];
      mysqli_select_db($mysqli,"election");
    $drp1="DELETE FROM  t1 WHERE ad_no = $c_ada1";
    $rre1=mysqli_query($mysqli,$drp1);
  $v_n1="INSERT into t1(ad_no,vt_cnt,name) values('$c_ada1','1','jaz')";
    $resto1=mysqli_query($mysqli,$v_n1);
    echo"<script> window.location.href='popvt.php';</script>";
}
   if (isset($_POST['fbtn2'])) {
    $c_ada2=0;
      $c_ada2=$_POST['admi'];
      mysqli_select_db($mysqli,"election");
          $drp2="DELETE FROM  t2 WHERE ad_no = $c_ada2";
    $rre2=mysqli_query($mysqli,$drp2);
  $v_n2="INSERT into t2(ad_no,vt_cnt,name) values('$c_ada2','1','jaz')";
    $resto2=mysqli_query($mysqli,$v_n2);
    echo"<script> window.location.href='popvt.php';</script>";
}
   if (isset($_POST['fbtn3'])) {
    $c_ada3=0;
      $c_ada3=$_POST['admi'];
      mysqli_select_db($mysqli,"election");
          $drp3="DELETE FROM  t3 WHERE ad_no = $c_ada3";
    $rre3=mysqli_query($mysqli,$drp3);
  $v_n3="INSERT into t3(ad_no,vt_cnt,name) values('$c_ada3','1','jaz')";
    $resto3=mysqli_query($mysqli,$v_n3);
    echo"<script> window.location.href='popvt.php';</script>";
}
    if (isset($_POST['fbtn4'])) {
      $c_ada4=0;
      $c_ada4=$_POST['admi'];
      mysqli_select_db($mysqli,"election");
    $drp4="DELETE FROM  t4 WHERE ad_no = $c_ada4";
    $rre4=mysqli_query($mysqli,$drp4);
  $v_n4="INSERT into t4(ad_no,vt_cnt,name) values('$c_ada4','1','jaz')";
    $resto4=mysqli_query($mysqli,$v_n4);
    echo"<script> window.location.href='popvt.php';</script>";
}
?>
 
  <div class="container signin">
  </div>
</form>

</body>
</html>
