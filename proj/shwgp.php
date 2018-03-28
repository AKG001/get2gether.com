<?php
$user_name=$_GET['user'];

include('connect.php');

?>

<?php
$q=mysql_query("select gp_id from gp_member WHERE member='$user_name' ORDER BY Admin,time") or die(mysql_error());
if(mysql_num_rows($q))
while($f=mysql_fetch_array($q))
{
	$id=$f['gp_id'];
	$g=mysql_fetch_array(mysql_query("select gname from groups WHERE gp_id='$id'"));
	
?>

<a href="mgpage.php?g=<?php echo $g['gname']; ?>"><?php echo $g['gname']; ?></a><br/>

<?php
	
}
else echo "You have no Groups Yet! Create yours <a href=cgform.php>now.</a>";
?>