<?php

if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');

$user_name=$_SESSION['user_name'];

include('connect.php');
if(isset($_POST['cg']))
{
	extract($_REQUEST);
	
	$a=$_FILES['gphoto']['tmp_name'];
	$b=time().$_FILES['gphoto']['name'];
	$store="gp_uploads/".$b;
	
	move_uploaded_file($a,$store);
	
	if($b==time()) $b="gp_default.jpg";
	
	
	
	mysql_query("insert into groups values(NULL,'$gname','$user_name','$gdesc','$b','$vt','$vp','$join',CURRENT_TIMESTAMP)") or die(mysql_error());
		$i=mysql_fetch_array(mysql_query("select gp_id from groups WHERE gname='$gname' AND gcreator='$user_name'"));
		$id=$i['gp_id'];
		
		mysql_query("insert into gp_member values('$id','$user_name',CURRENT_TIMESTAMP,1)");
	
	echo $user_name;
		header('location:mgpage.php?g='.$gname);
	}


?>