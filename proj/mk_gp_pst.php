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
		
		 mysql_query("insert into gp_post values('$id','$user_name','$share',CURRENT_TIMESTAMP,'$time')");
	
	
	
	if(!empty(array_filter($_FILES['uploads']['name'])))
	for($i=0;$i<count($_FILES['uploads']['name']);$i++)
	{
		
	$a=$_FILES['uploads']['tmp_name'][$i];
	$b=time().$_FILES['uploads']['name'][$i];
	$store="gp_uploads/".$b;
	
	mysql_query("insert into gp_attach values('$time','$b',CURRENT_TIMESTAMP)");
	move_uploaded_file($a,$store);
	}
	}
	header('location:mgpage.php?g='.$g);	

?>