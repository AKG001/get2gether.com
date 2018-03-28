<?php
include("connect.php");
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];
$id=$_GET['q'];
$Q=mysql_query("SELECT first_name,pic FROM user_info WHERE user_name='$id'") or die(mysql_error());
$Q=mysql_fetch_array($Q);
$name_link='<a href="profile.php?q='.$id.'">'.$Q['first_name'].'</a>';
?>
<div class="chat_header"><img src="<?php echo "users/profile/".$Q['pic']; ?>" /><div class="chat_header_name"> <?php echo  $name_link;?></div><img src="icons/close-icon-white.png" class="close_chat"  onclick="close_chat_box(<?php echo $id;?>)"/>   </div>
<div class="chat_area" id="msg<?php echo $id; ?>"></div>
<div class="chat_textarea"><textarea class="chat_live_msg_textarea"  onkeyup="message_typing(event,this)" ></textarea> <input type="hidden" value="<?php echo $id; ?>" class="hidden_id_textarea" /></div>
