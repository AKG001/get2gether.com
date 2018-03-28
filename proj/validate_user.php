<?php
include("connect.php");
$user=$_GET['user'];
$email=$_GET['email'];
$q=mysql_query("SELECT user_name,email FROM user_info WHERE user_name='$user' or email='$email' ")or die (mysql_error());

if(mysql_num_rows($q)>0)
{$f=mysql_fetch_array($q);

	
	if($f['user_name']==$user)
	{echo '2';
	}else if($f['email']==$email)echo '3';
	
}
else echo '1';


?>