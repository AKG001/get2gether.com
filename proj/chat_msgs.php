<?php
include("connect.php");
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];
$id=$_GET['q'];

if(strcmp($id,$user_name)>=0)
		{
			$msg_key=$id.".".$user_name;
		}
		else 
		{	$msg_key= $user_name.".".$id;
		
		}
		
		
			$QRR=mysql_query("SELECT content,send_by FROM message WHERE msg_id='$msg_key' ORDER BY key_message ASC" )or die (mysql_error());
mysql_query("UPDATE message SET read_or_not=1 WHERE send_by='$id' and received_by='$user_name'");
while($FRR=mysql_fetch_array($QRR))
{
	if($FRR['send_by']==$user_name)
	{?>
    <div class="cover_right">
		<div class="talk-bubble round tri-right right-top align">	
	<?php }
	else
	{?><div class="cover">
	<div class="talk-bubble_white round tri-right left-top">	
	<?php }
		?>
        
<div class="talktext"><p><?php echo $FRR['content'];?></p></div>

</div>
</div><!------End of snd by or received by---->
<?php
}
?>
