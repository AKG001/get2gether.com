<?php
session_start();

if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");

session_destroy();
header("location:index.php");


?>