<?php

include('../connect.php');
$gname=$_GET['value'];
$by=$_GET['by'];

$q=mysql_fetch_array(mysql_query("select gname from groups WHERE gname='$gname'"));
if($gname=="") $gname=" ";

if(stristr($q['gname'],$gname)==TRUE)
echo "Sorry,Already used this name!";
else
{
	if($gname!=" ")
	 echo "Available";
}
?>