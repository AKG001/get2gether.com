<head>
<!--Script putting comments in database when press enters -->
<script src="js/put_comment.js"></script>
<script src="js/like_comment.js"></script>
<!--Posts comments CSS-->
<style>
@import "css/like.css";
@import "css/comments.css";
@import "css/home.css";
</style>
</head>



<?php

if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');

/*Selecting posts to show on someone's particular dashboard */

$q=mysql_query("select posts.*,friend_request.send_by,friend_request.received_by from posts INNER JOIN friend_request ON ((friend_request.send_by='$user_name' AND friend_request.received_by=posts.post_by) OR (friend_request.received_by='$user_name' AND friend_request.send_by=posts.post_by))  WHERE (friend_request.accept=1 AND visibility!='private') ORDER BY time desc ") or die (mysql_error());


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

	$d=$f['post_by'];
	$e=$f['post_id'];
	
	$p=mysql_fetch_array(mysql_query("select * from user_info where user_name='$d' "));	   /*It will print commenter's photo*/
	$pic=$p['pic'];
	?><div id="pphoto">
	<img src=users/profile/<?php echo $pic; ?> width=5%; />
    </div>
	
	

	<div id="content">		<!--It will description about the post -->
	<strong><font size=+1><?php echo $p['full_name_link'];?>
    </font></strong>
    <?php
	if($f['post_description']!="")
	echo " made a new post.<font style=opacity:0.5;><br/>at:".$f['time']."</font></div>";
	else echo "uploaded something new.<font style=opacity:0.5;><br/>at:".$f['time']."</font></div>";
	
	?>
    
    
    <span id="descrip"><?php echo $f['post_description']; ?></span>	
	<?php
	
	$a=mysql_query("select * from attachments where post_id='$e' ");
	?>
	
    
   <div id="attach">
	<?php
	if(mysql_num_rows($a))
	while($attachments=mysql_fetch_array($a))
	{
?>	
	
	<img src="post_uploads/<?php echo $attachments['attached']; ?>" />
    
    <?php }
 ?>    
   
    
    </div>
    
    
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
  	<div id="pcp"><img src="users/profile/<?php echo $p['pic'] ?>" width="5%" /></div>
    <textarea onkeypress="comment(event,<?php echo $e ?>,'<?php echo $user_name; ?>',<?php echo $count; ?>)" id="comment<?php echo $count; ?>" class="comment_text" rows="1" placeholder="Add a comment...."  style="margin-top:-5%; margin-left:2%;"></textarea>
    
  
    </section><?php
$count++;
}


?>
</div>