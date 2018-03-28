<?php

session_start();
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');

include("connect.php");

$user_name=$_SESSION['user_name'];

$q=mysql_query("select send_by,received_by from friend_request where (send_by='$user_name' or received_by='$user_name') and accept=1 ");

if($q=="" or $q== null)
echo "You have no friends yet";

else
{
	while($f=mysql_fetch_array($q))
	{
		if($f['send_by']==$user_name) echo "<a href=profile.php?q=".$f['received_by']."><strong>".$f['received_by']."</strong></a>&nbsp; &nbsp;  $status <br/>";
		else if($f['received_by']==$user_name) echo "<a href=profile.php?q=".$f['send_by']."><strong>".$f['send_by']."</strong></a>&nbsp &nbsp;  $status <br/>";
	}

}
?>