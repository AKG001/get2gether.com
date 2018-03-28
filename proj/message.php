<style>
@import "css/message.css";
@import "css/msg_thread.css";
@import "css/msg_thread_stylish.css";
@import "css/head_bar.css";
@import "css/rotator.css";
@import "css/friend_bar.css";
@import "css/home.css";
</style>
<script src="js/rotator.js"></script>
  <?php
  
session_start();
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');
include("connect.php");
include("function.php");
$user_name=$_SESSION['user_name'];

$pic=$_SESSION['pic'];
?>
<?php 
function send_msg($to,$msg_content)
{
	$user_name=$_SESSION['user_name'];

		$t=date('Y M,d h:i:s A' );
		if(strcmp($to,$user_name)>=0)
		{
			$msg_key=$to.".".$user_name;
		}
		else 
		{	$msg_key= $user_name.".".$to;
		
		}
		
		echo $key;
		$qry=mysql_query("insert into message (send_by,received_by,time,content,msg_id) values ('$user_name','$to','$t','$msg_content','$msg_key') ");
		if($qry)
	
	{
	?>
	<script type="text/javascript">
	alert("Message Sent");
    </script> 
	<?php
	}
	else 
	{?>
    <script type="text/javascript">
	alert("Failed");
    </script> 
	<?php
	}	
	}
?>
<html>
<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>

<?php 
include("head_bar.php");
include("navigator.php");
include("chating_bar.php");
?>
<textarea name="msg" class="new_Msg_textarea" placeholder="Enter Your message here " ></textarea>
<!------ OUTPUT------> 
<div id="output_thread">
<div id="back" onclick="hide_thread()"></div>
<div id="front"></div>
<div id="message_textarea">
<textarea name="msg" id="msg_typing_area"  onkeyup="handle(event,this)" autofocus="autofocus" placeholder="Type and Press Enter To Send"  style="resize:none;width:100%;font-family: 'Indie Flower', cursive;" ></textarea>
</div>
<!------ OUTPUT------> 
<?php
//-----------Fetch Message-------

$qr=mysql_query("SELECT MAX(message.time),message.content,user_info.full_name_link,user_info.pic,user_info.user_name FROM user_info INNER JOIN message ON((user_info.user_name=message.send_by AND message.received_by='$user_name') OR (user_info.user_name=message.received_by AND message.send_by= '$user_name'))  GROUP BY message.msg_id ORDER BY key_message DESC "  )or  die(mysql_error());
?>	

<div id="spechhhhhh">
       <?php		
		while($fr=mysql_fetch_array($qr))
		{
		?>	
  <div class="thread">
  	<input type="hidden" class="thread_id" value="<?php echo $fr['user_name'];  ?>" />
  <avatar>
  <div class="gloss"></div>
  <img src="users/profile/<?php echo $fr['pic']; ?>"/>
   </avatar>
  <box class="speech outer">
  
  <box class="speech inner">
	
  <div class="textwrapper">
  <span class="title"><?php echo $fr['full_name_link']; ?></span>
  <span class="tweet">
  	<?php echo $fr['content']; ?>
    </span>
 <ul class="actions">
 <li><i class="icon-reply"></i> Reply</li>
 </ul>
 </div>
  </box>
  </box>
 </div>
<?php
		}
?>
</div>
<script src="js/live_msg.js"></script>

</html>
