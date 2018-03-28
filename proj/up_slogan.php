<?php 
include("connect.php");
extract($_GET);
mysql_query("UPDATE user_info SET slogan='$v' WHERE user_name='$q'");
?>