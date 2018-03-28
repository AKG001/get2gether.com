<style>
span:hover
{
	background:#03C;
}

</style>
<?php 

include('connect.php');


$user=$_GET['value'];
$user_name=$_GET['by'];

if($user==null) $user=" ";

$QRY=mysql_query("SELECT user_info.* FROM user_info INNER JOIN friend_request ON (friend_request.accept=1 AND ((friend_request.send_by ='$user_name' AND friend_request.received_by =user_info.user_name) OR ( friend_request.received_by='$user_name' AND friend_request.send_by =user_info.user_name) )) ORDER BY friend_request.bonding DESC ")or die (mysql_error()) ;




while($f=mysql_fetch_array($QRY))
{
	if(stristr($f['user_name'],$user)==TRUE)
	{
	?>
	
	<span onclick="chang(this)"><?php echo $f['first_name']." ".$f['last_name']; ?></span> 
	<br/>	
	
	<?php
}
}
?>


