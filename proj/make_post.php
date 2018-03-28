<?php
	session_start();
	if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
		header('location:index.php');
	
	include("connect.php");

	
	$user_name=$_SESSION['user_name'];
		
	extract($_REQUEST);
	
	if($share!="" || !empty(array_filter($_FILES['uploads']['name'])))
	{
		$time=time();
		 mysql_query("insert into posts values('$time','$user_name','$share','$visibility',CURRENT_TIMESTAMP)");
	
	
	
	if(!empty(array_filter($_FILES['uploads']['name'])))
	for($i=0;$i<count($_FILES['uploads']['name']);$i++)
	{
		
	$a=$_FILES['uploads']['tmp_name'][$i];
	$b=time().$_FILES['uploads']['name'][$i];
	$store="post_uploads/".$b;
	
	mysql_query("insert into attachments values('$user_name','$b','$time')");
	move_uploaded_file($a,$store);
	}
	}
	header('location:home.php');	

?>