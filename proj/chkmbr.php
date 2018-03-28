<?php

include('../connect.php');

$mem=$_GET['mem'];
$id=$_GET['id'];

$q=mysql_fetch_array(mysql_query("select member from gp_member WHERE member='$mem' AND gp_id='$id'"));
if($mem==$q['member'])
{
	echo "Already a member";
	return ;
}

$f=mysql_fetch_array(mysql_query("select * from notification where note_for='$mem' AND id='$id' "));

if($mem==$f['note_for'] && $id==$f['id'])
{
	echo "Asked for Membership";
	return ;
}

echo "Add as Member";


?>