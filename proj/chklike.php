<?php
$id=$_GET['id'];
$liker=$_GET['user'];


include("connect.php");
$q=mysql_query("select * from likes WHERE post_id='$id' AND liked_by='$liker'");

if(mysql_num_rows($q))
echo 1;
else echo 0;


?>