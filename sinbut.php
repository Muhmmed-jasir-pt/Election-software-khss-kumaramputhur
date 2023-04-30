<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button type="submit" name="fbtn" class="registerbtn" >View</button>
<?php
mysqli_select_db($mysqli,"election");
$sqlt="SELECT * FROM j2 WHERE adm_no=1";
$res=mysqli_query($mysqli,$sqlt);
if (mysqli_num_rows($res)>0) {
	while ($images=mysqli_fetch_assoc($res)) {?>
		<div class="alb">
			<img src="cd_images/<?=$images['photo']?>">
		</div>
		<?php
	}
}
?>
</body>
</html>