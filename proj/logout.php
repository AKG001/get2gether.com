<?php
session_start();
include ("connect.php");
if($_SESSION['user_name']!="" or $_SESSION['user_name']!=null )
{	
$user_name=$_SESSION['user_name'];
mysql_query("UPDATE user_info SET status=0 WHERE user_name='$user_name'")or die (mysql_error()) ;
	session_destroy();
}
header("location:index.php");

?>