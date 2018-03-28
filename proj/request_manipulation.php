<?php
session_start();
include("connect.php");
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');

$username=$_SESSION['user_name'];
extract($_GET);

if($action=="accept")
{
	$time=date('l jS \of F Y h:i:s A');
	mysql_query("update friend_request set accept=1,response_time='$time' where send_by='$send_by' AND received_by='$username'");	
}
else if($action=="reject")
{
	mysql_query("delete from friend_request where send_by='$send_by' AND received_by='$username' ");
}
else if($action=="cancel")
{
	mysql_query("delete from friend_request where send_by='$username' AND received_by='$send_by' ");
}


?>