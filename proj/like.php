<?php
$id=$_GET['id'];
$liker=$_GET['user'];
$click=$_GET['click'];

include("connect.php");
$q=mysql_query("select * from likes WHERE post_id='$id' AND liked_by='$liker'");
if($click)
{

if(mysql_num_rows($q))
{
	mysql_query("Delete from likes Where post_id='$id' AND liked_by='$liker'");
}
else
{
	mysql_query("insert into likes values('$id','$liker',CURRENT_TIMESTAMP)");
}
}
else
{
	if(mysql_num_rows($q)) echo 1;
	else echo 0;
}

?>