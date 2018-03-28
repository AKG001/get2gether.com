<?php
include("connect.php");
session_start();
$user_name=$_SESSION['user_name'];
		 
$t_width = 100;	// Maximum thumbnail width
$t_height = 100;	// Maximum thumbnail height
$new_name = "small".$user_name.time().".jpg"; // Thumbnail image name
$path = "users/profile/";
if(isset($_GET['t']) and $_GET['t'] == "ajax")
	{
		extract($_GET);
		$ratio = ($t_width/$w); 
		$nw = ceil($w * $ratio);
		$nh = ceil($h * $ratio);
		$nimg = imagecreatetruecolor($nw,$nh);
		$im_src = imagecreatefromjpeg($path.$img);
		imagecopyresampled($nimg,$im_src,0,0,$x1,$y1,$nw,$nh,$w,$h);
		

		imagejpeg($nimg,$path.$new_name,90);
		mysql_query("UPDATE user_info SET pic='$new_name' WHERE user_name='$user_name'");
		$_SESSION['pic']=$new_name;
		echo $new_name."?".time();
		exit;
	}
	
	?>