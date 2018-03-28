<?php
include("connect.php");
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];
$QRY=mysql_query("SELECT user_info.pic,user_info.status,user_info.user_name FROM user_info INNER JOIN friend_request ON (friend_request.accept=1 AND ((friend_request.send_by ='$user_name' AND friend_request.received_by =user_info.user_name) OR ( friend_request.received_by='$user_name' AND friend_request.send_by =user_info.user_name) )) ORDER BY  user_info.status DESC,friend_request.bonding DESC ")or die (mysql_error()) ;
while($F=mysql_fetch_array($QRY))
{$per=$F['user_name'];
	$mq=mysql_query("SELECT content FROM message WHERE ((send_by='$per' AND received_by='$user_name')AND read_or_not='0')")or die(mysql_error()); 
	$nos=mysql_num_rows($mq);
	
?>
<div class="whole_friend" onclick="open_chat(this)">
	
		<img src="<?php echo "users/profile/".$F['pic'];?>" />
        <input type="hidden" class="chat_id" value="<?php echo $F['user_name']; ?>"/>
    <?php
		if($F['status']==1)
		{
		?>
        <div class="online"></div>  
		<?php
		}
		if($nos>0)
		{
		?>
        <div class="msgs"><?php echo $nos;?></div>  
		<?php
		}
		
	?>
</div>    
 <?php
}
?> 