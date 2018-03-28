<?php
	$e=$_GET['id'];
	include('connect.php');
	
	$qc=mysql_query("select * from comments where comment_id='$e'") or die (mysql_error());
	$comments_num=mysql_num_rows($qc);

	
	$likes_num=mysql_num_rows(mysql_query("select * from likes where post_id='$e'"));
	
?>	
	
   <!-- <span class="progress">IN PROGRESS</span>-->
   <br/>
&ensp;<?php if($likes_num)echo $likes_num." people likes this."; ?>
&ensp;&ensp;&ensp;<?php if($comments_num)echo $comments_num." people commented on this."; ?>




<div class="comments clearfix">
  <ol>
  <?php	
	while($fc=mysql_fetch_array($qc))	
	{
			
		$s=$fc['comment_by'];
		$user=mysql_fetch_array(mysql_query("select * from user_info WHERE user_name='$s' "));
		
	?>
    
    <li class="clearfix">
      
      <div class="author">
        <img src="users/profile/<?php echo $user['pic']; ?>" alt="" />
        <cite><?php echo $user['full_name_link']; ?></cite>

      </div><!--.author-->
      
      <p><?php echo $fc['comment']; ?></p>
      
    </li>
    
        
	<?php
	}
	
	?>
    
  </ol>
</div>