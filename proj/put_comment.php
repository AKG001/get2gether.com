<?php
	include('connect.php');
	
	$comment=$_GET['comment'];
	$post_id=$_GET['id'];
	$by=$_GET['by'];
	
	mysql_query("insert into comments(comment_id,comment_by,comment,time) values('$post_id','$by','$comment',CURRENT_TIMESTAMP)") 	or die(mysql_error());
	
?>