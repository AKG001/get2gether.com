<head>
<!--Script putting comments in database when press enters -->
<script src="js/jquery.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/like&comment.js"></script>
<script src="js/put_comment.js"></script>
<!--Posts comments CSS-->

<style>
@import "css/posts.css";
@import "css/like.css";
@import "css/comments.css";
</style>
</head>




<?php
include('connect.php');

session_start();
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:../index.php');


$pers=$_GET['q'];

$perp=mysql_query("select * from posts WHERE post_by='$pers'");
$num=mysql_num_rows($perp);
if($num==0) echo "No posts To display....";
?>

<div id="feeds"  class="<?php echo $num; ?>" style="width:100%;margin-left:0;display:block;position:relative;">

<?php
$count=1;
while($per_pos=mysql_fetch_array($perp))
{
	
	$e=$per_pos['post_id'];
		?>
    <section id="posts" style="height:auto;">
   	<?php
	
	
	
	$p=mysql_fetch_array(mysql_query("select * from user_info where user_name='$pers' "));	   /*It will print commenter's photo*/
	$pic=$p['pic'];
	?><div id="pphoto">
	<img src=users/profile/<?php echo $pic; ?> width=5%; />
    </div>

	
	
	<div id="content">		<!--It will description about the post -->
	<strong><font size=+1><?php echo $p['full_name_link'];?>
    </font></strong>
    <?php
	if($per_pos['post_description']!="")
	echo " made a new post.<font style=opacity:0.5;><br/>at:".$per_pos['time']."</font></div>";
	else echo "uploaded something new.<font style=opacity:0.5;><br/>at:".$per_pos['time']."</font></div>";
	
	?>
    
    
	<span id="descrip"><?php echo $per_pos['post_description']; ?></span>	
	<?php
	
	$a=mysql_query("select * from attachments where post_id='$e' ") or die(mysql_error());
	?>
	<div id="attach">
	<?php
	if(mysql_num_rows($a))

	while($attachments=mysql_fetch_array($a))
	{
?>		
	
	<img src="post_uploads/<?php echo $attachments['attached']; ?>"  id="attach<?php echo $count; ?>">
    
	
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
   	
  	<img src="users/profile/<?php echo $p['pic'] ?>" width="5%" style="position:relative; margin:3.2% 1% auto;"/>
    <textarea onkeyup="comment(event,<?php echo $e ?>,'<?php echo $user_name; ?>',<?php echo $count; ?>)" id="comment<?php echo $count; ?>" class="comment_text" rows="1" placeholder="Add a comment...."  style="margin:3.5% 1% auto;"></textarea>
    
  
	
    
    </section><?php
$count++;

	
}


?>
</div>