<?php
session_start();
include("connect.php");
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');


$user_name=$_SESSION['user_name'];
$q=mysql_query("select send_by from friend_request where received_by='$user_name' AND accept=0");
if($q==null || $q=="") 
echo "No request yet";
else
{
	echo mysql_num_rows($q);
	while($f=mysql_fetch_array($q))
	{
		$user=$f['send_by'];
		$info=mysql_fetch_array(mysql_query("select first_name,last_name from user_info where user_name='$user'"));
		echo "<a href=profile.php?q=".$info['first_name']." ".$info['last_name']."><strong>".$f['send_by']."</strong></a> wants to be your friend<br\>";
		echo "<a href=request_manipulation.php?action=accept&send_by=".$f['send_by']."><input type=button value=Accept /></a>";
		echo "<a href=request_manipulation.php?action=reject&send_by=".$f['send_by']."><input type=button value=Reject /></a>";
		
	}
	
}

?>
