<?php

include('connect.php');
$user_name=$_GET['by'];
$for=$_GET['for'];
$gid=$_GET['id'];
$time=time();

$q=mysql_fetch_array(mysql_query("select member from gp_member WHERE member='$for' AND gp_id='$gid'"));
if($for==$q['member'])
{
	echo "Already a member!";
	return ;
}

$f=mysql_fetch_array(mysql_query("select * from notification where note_for='$for' AND id='$gid' "));

if($for==$f['note_for'] && $gid==$f['id'])
{
	echo "Already invited!";
	return ;
}

$q=mysql_fetch_array(mysql_query("select gname from groups WHERE gp_id='$gid'"));
$in=$q['gname'];

$desc=$user_name." invited you to join this group $in <br/><a href=not_act.php?a=1&id=".$time."&gid=".$gid.">Join Group</a><a href=not_act.php?a=0&id=".$time.">Not Now</a>";



mysql_query("insert into notification values('$for','$user_name','$gid','$desc',CURRENT_TIMESTAMP,1,0)") or die(mysql_error());
echo "Invite Send."
?>