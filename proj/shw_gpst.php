<head>
<!--Script putting comments in database when press enters -->
<script src="js/jquery.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/like&comment.js"></script>
<script src="js/gptcmmnt.js"></script>
<script src="js/glicmmnt.js"></script>
<!--Posts comments CSS-->
<style>
@import "css/like.css";
@import "css/comments.css";
</style>
</head>

<div id="Sug" onmouseup="javascript:$('#Sug').css('display','none');" style="position:absolute; height:20%; width:20%; overflow:auto; background:#FFC; text-transform:uppercase; display:none; box-shadow:2px 3px #009F55; border:1px solid #00F; left:55%; top:6%; z-index:3000;">
<input type="button" value="Create My Group" onClick="javascript:document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';document.getElementById('close').style.display='block';" />
<br/></div>

<?php


/*Selecting posts to show on someone's particular dashboard */

$q=mysql_query("select * from gp_post WHERE gp_id='$id' ORDER BY time desc") or die (mysql_error());

$num=mysql_num_rows($q);
?>

<div id="feeds"  class="<?php echo $num; ?>">

<?php

$count=1;
while($f=mysql_fetch_array($q))
{
	?>
    <section id="posts" style="height:auto;">
   	<?php
	
	$d=$f['gpst_by'];
	$e=$f['gpst_id'];
	
	
	$p=mysql_fetch_array(mysql_query("select * from user_info where user_name='$d' "));	   /*It will print commenter's photo*/
	$pic=$p['pic'];
	?><div id="pphoto">
	<img src=users/profile/<?php echo $pic; ?> width=5%; />
    </div>
	
	
	
	<div id="content">		<!--It will description about the post -->
	<strong><font size=+1><?php echo $p['full_name_link'];?>
    </font></strong>
    <?php
	if($f['gpst_desc']!="")
	echo " made a new post.<font style=opacity:0.5;><br/>at:".$f['time']."</font></div>";
	else echo "uploaded something new.<font style=opacity:0.5;><br/>at:".$f['time']."</font></div>";
	
	?>
    
    
	<span id="descrip" style="float:none;"><?php echo $f['gpst_desc']; ?></span>	
	<?php
	
	$a=mysql_query("select * from gp_attach where gpst_id='$e' ");
	?>
	
	<?php
	if(mysql_num_rows($a))
	{
		?><div id="attach"><?php
	while($attachments=mysql_fetch_array($a))
	{
?>		
	
	<img src="gp_uploads/<?php echo $attachments['attach']; ?>" class="<?php echo $e; ?>"  id="attach<?php echo $count; ?>">
    
	
    <?php }
	
 ?>    
    </div>
    <?php } ?>
    <input type="hidden" id="help<?php echo $count; ?>" class="<?php echo $e; ?>" value="<?php echo $user_name; ?>" />
    
    
    <ul class="profile-options horizontal-list">
                        <li><a class="likes" href="#42">
  <div class='like'>
  <button class='like-toggle basic2' id=<?php echo $e."like"; ?> onclick="likee(<?php echo $e; ?>,this,'<?php echo $user_name; ?>')">
  ♥
  </button>
  						<span class='hidden'>You like this</span>
    					</div>
                        </li></a>
                        <li><a class="views" href="#41"><img src="icons/message.png" height="30" /></li></a>
                        <li><a class="comments" href="#40">
                        <img src="icons/comments.png" height="30" />
                        </a></li>
      </ul><br/>
    
    
        
    


    <div id="comments<?php echo $count; ?>"></div>
    
    
   	<?php
	$p=mysql_fetch_array(mysql_query("select * from user_info where user_name='$user_name' "));
	?>
  	
    <div id="pcp" style=" position:relative; margin-top:6%; margin-left:2%;"><img src="users/profile/<?php echo $p['pic'] ?>" width="5%" /></div>
    <textarea onkeypress="comment(event,<?php echo $e ?>,'<?php echo $user_name; ?>',<?php echo $count; ?>)" id="comment<?php echo $count; ?>" class="comment_text" rows="1" placeholder="Add a comment...."  
    style="margin-top:-4.7%;"></textarea>
    
  
	
    
    </section><?php
$count++;
}

?>
</div>
