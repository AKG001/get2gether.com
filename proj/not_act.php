<?php

if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:../index.php');


$user_name=$_SESSION['user_name'];

include('../connect.php');

$a=$_GET['a'];
$id=$_GET['id'];
$time=time();
if($a==1)
{
	$gid=$_GET['gid'];
	mysql_query("insert into gp_member values('$gid','$user_name',$time)");
}
mysql_query("update notification SET show=0 WHERE id='$id'");

?>