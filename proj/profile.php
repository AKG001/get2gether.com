<?php
include("connect.php");
include("function.php");
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];
$pic=$_SESSION['pic'];
$curr_pro_user=$_GET['q'];
 include("common.php");
 include("profile_side_bar.html");
?>
<style>
@import "css/profile.css";
@import "css/light_box.css";
@import "css/msg_thread.css";
@import "css/msg_thread_stylish.css";

</style>


<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

<?php  
if($curr_pro_user=="" or $curr_pro_user==null or $curr_pro_user==$user_name)
{	$curr_pro_user=$user_name;
// Execute My profile	 
	$qrry=mysql_query("SELECT * FROM user_info WHERE user_name='$user_name'");
	$fct=mysql_fetch_array($qrry);
	?>
	<div id="wrapper" style="float:left">
    
    <div class="profile_left">
    <div class="profile_photo"><img src="users/profile/<?php echo $fct['pic'];?>"/>    
    </div>
  
    <div class="profile_photo_update" onclick="open_light_box('upl',600,400)">Update</div>
  	<div class="profile_name"><?php echo $fct['full_name_link'];?></div>
   <div class="profile_about_me"><i class="fa fa-bookmark"></i><span>&nbsp;&nbsp;Slogan</span><div id="green_small" onclick="open_light_box('slg',300,200)"><a>Edit</a></div></div>
   <div class="profile_about_me_content"><span> <?php if($fct['slogan']!=null && $fct['slogan']!="") echo $fct['slogan']; else echo "---";?></span></div>
    <div class="profile_status"><span>Status</span><div id="green_small"><a><?php if($fct['status']==1)echo Active; else  echo offline;  ?></a></div> </div>
  
    <div class="profile_status">Member Since <div id="orange_small"><a><?php echo $fct['join_date'];?></a></div> </div>
 
    </div>


    <div class="frnd">
 
 	<div class="Friends">
    <i class="fa fa-users fa-2x"></i><div class="Fr_title">Friends</div>
    <div class="list_friends">
   
    
    <?php
   	$QRYi=mysql_query("SELECT user_info.pic,friend_request.bonding,user_info.user_name FROM user_info INNER JOIN friend_request ON (friend_request.accept=1 AND ((friend_request.send_by ='$user_name' AND friend_request.received_by =user_info.user_name) OR ( friend_request.received_by='$user_name' AND friend_request.send_by =user_info.user_name) )) ORDER BY friend_request.bonding DESC LIMIT 9 ")or die (mysql_error()) ;
while($Frr=mysql_fetch_array($QRYi))
{
?>

<a href="profile.php?q=<?php echo $Frr['user_name'];?>"><div class="outer"><img src="<?php echo"users/profile/".$Frr['pic']; ?>"/> </div>
</a>
<?php
}
	?>
 
 </div>
  
    </div>
 <a> <div class="see_all_frnd" onclick="open_light_box('frn',300,500)">See all Friends &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i> </div></a>
   
    </div>
 
 
 
 
 	</div>
 
 <div class="changeable">
 <div class="load_inner">
 
 </div>
</div>
 	
	<?php
}


else 
{
  // Execute other profile	
	
	
	$qrry=mysql_query("SELECT full_name_link,pic,status,slogan,join_date  FROM user_info WHERE user_name='$curr_pro_user'");
	function isfriend($curr_pro_user)
	{//REturns 0 if not ,1 if frirnd ,2 if $user_name sends requests else 3
	$user_name=$_SESSION['user_name'];

		$CH=mysql_query("SELECT accept,send_by FROM friend_request WHERE ((send_by='$curr_pro_user' AND received_by='$user_name')OR (send_by='$user_name' AND received_by='$curr_pro_user'))");
	if(mysql_num_rows($CH)>0)
	{		$fr=mysql_fetch_array($CH);
		if($fr['accept']==1)
		return 1;
		else if ($fr['send_by']==$user_name)
		return 2;
		else return 3;
	}
	else return 0;
	
	}
	$fct=mysql_fetch_array($qrry);
	?>
	<div id="wrapper" style="float:left">
    
    <div class="profile_left">
    <div class="profile_photo"><img src="users/profile/<?php echo $fct['pic'];?>"/>    
    </div>
   
	<?php  if(isfriend($curr_pro_user)==0){
		
		?> 
    <div class="profile_snd_rqst" onclick="send_request()">Send Request</div>
    <?php
	}
	 else if(isfriend($curr_pro_user)==1){
		
		?> 
    <div class="profile_photo_update"><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Friends</div>
    <?php
	}
else if(isfriend($curr_pro_user)==2){
		
		?> 
    <div class="profile_snd_rqst"onclick="cancel_request()"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel Request</div>
    <?php
	}
else {
		
		?> 
    <div class="profile_photo_update" onclick="accept_request()"><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Approve</div>
    <div class="profile_snd_rqst" onclick="reject_request()"><i class="fa fa-times"></i>&nbsp;&nbsp;Reject</div>
    
	<?php
	}

	
	
	?>
       
    <div class="snd_msg" onclick="msg_open()"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp; Send Message</div>
    
   
  	<div class="profile_name"><?php echo $fct['full_name_link'];?></div>
   <div class="profile_about_me"><i class="fa fa-bookmark"></i><span>&nbsp;&nbsp;Slogan</span></div>
   <div class="profile_about_me_content"><span> i am a hggffc cg  cgfghvhgc fxdfxsxd dsfdgfcb dfgf wesome</span></div>
    <div class="profile_status"><span>Status</span><div id="green_small"><a><?php if($fct['status']==1)echo Active; else  echo offline;  ?></a></div> </div>
  
    <div class="profile_status">Member Since <div id="orange_small"><a><?php echo $fct['join_date'];?></a></div> </div>
 
    </div>


    <div class="frnd">
 
 	<div class="Friends">
    <i class="fa fa-users fa-2x"></i><div class="Fr_title">Friends</div>
    <div class="list_friends">
   
    
    <?php
	$QRYi=mysql_query("SELECT user_info.pic,friend_request.bonding,user_info.user_name FROM user_info INNER JOIN friend_request ON (friend_request.accept=1 AND ((friend_request.send_by ='$curr_pro_user' AND friend_request.received_by =user_info.user_name) OR ( friend_request.received_by='$curr_pro_user' AND friend_request.send_by =user_info.user_name) )) ORDER BY friend_request.bonding DESC LIMIT 9 ")or die (mysql_error()) ;
while($Frr=mysql_fetch_array($QRYi))
{
?>

<a href="profile.php?q=<?php echo $Frr['user_name'];?>"><div class="outer"><img src="<?php echo"users/profile/".$Frr['pic']; ?>"/> </div>
</a>
<?php
}
	?>
 
 </div>
  
    </div>
 <a> <div class="see_all_frnd" onclick="open_light_box('frn',300,500)">See all Friends &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i> </div></a>
   
    </div>
 
 
 
 
 	</div>
 
 <div class="changeable">
 <div class="load_inner">

 </div>
</div>	
<?php	
	}

?>

<!-------->
<!------ OUTPUT------> 
<div id="output_thread">
<div id="back" onclick="hide_thread()"></div>
<div id="front"></div>
<div id="message_textarea">
<textarea name="msg" id="msg_typing_area"  onkeyup="handle(event,this)" autofocus="autofocus" placeholder="Type and Press Enter To Send"  style="resize:none;width:100%;font-family: 'Indie Flower', cursive;" ></textarea>
</div>
<!------ OUTPUT------> 

<div class="lightbox_back" onclick="hide_light_box()"> </div>
<div class="lightbox_front" ><div class="close_light_box" onclick="hide_light_box()"><i class="fa fa-times"></i></div><div class="light_box_content" ></div></div>
<input type="hidden" class="update_id" value="<?php echo $curr_pro_user;?>"  />
<div class="Updated"></div>
  <script src="js/profile.js"></script>
  <script src="js/live_msg.js"></script>
  