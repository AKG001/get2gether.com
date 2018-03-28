<?php
include('connect.php');

$pass=$_GET['pass'];
$user=$_GET['user'];

$q=mysql_fetch_array(mysql_query("select pass_word from user_info WHERE user_name='$user'"));


if(md5($pass)==$q['pass_word']) echo "match";
else echo "not a match";

?>