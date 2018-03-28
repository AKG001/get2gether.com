<?php
	include('connect.php');
	
	$comment=$_GET['comment'];
	$gpst_id=$_GET['id'];
	$by=$_GET['by'];
	
	mysql_query("insert into gcomments(gpst_id,comment_by,comment,time) values('$gpst_id','$by','$comment',CURRENT_TIMESTAMP)") 	or die(mysql_error());
	
?>