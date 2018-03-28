<?php 
include('function.php'); 
include('connect.php');
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];
?>


<script src="js/invite.js"></script>
<script src="js/shwgp.js"></script>
<!--<script src="js/validate_post.js"></script>
-->
<style>
@import "css/home.css";
@import "css/rotator.css";
@import "css/posts.css";
@import "css/lightbox.css";
@import "css/uploadphoto.css";
</style>


<?php include('common.php'); ?>


<div id="Sugg" style="position:absolute; display:none; height:20%; width:20%; overflow:auto; background:#FFC; text-transform:uppercase; box-shadow:2px 3px #009F55; border:1px solid #00F; left:55%; top:6%; z-index:3000;">
<input type="button" value="Create My Group" onClick="javascript:document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';document.getElementById('close').style.display='block';" />
<br/></div>

            
<a href="javascript:void(0);">
<img src="icons/close1.png" id="close" class="close_win" onClick="javascript:document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none';document.getElementById('close').style.display='none';">
</a>
<div id="light" class="white_content">
<?php include('cgform.php'); ?></div>
<div id="fade" class="black_overlay"></div>




<?php


$gname=$_GET['g'];

$ch=mysql_query("select gp_id from gp_member WHERE member='$user_name'") or die(mysql_error());


$qp=mysql_query("select * from groups WHERE gname='$gname'") or die(mysql_error());
echo mysql_num_rows($qp);

$ch1=mysql_fetch_array($ch);
$f=mysql_fetch_array($qp) or die(mysql_error());
while($ch1['gp_id']!=($f['gp_id']))
{
	$ch1=mysql_fetch_array($ch) or die(mysql_error());
	$f=mysql_fetch_array($qp) or die(mysql_error());
}

echo $_SESSION['id']=$id=$f['gp_id'];

$q=mysql_query("select * from groups WHERE gname='$gname' AND gp_id='$id'") or die(mysql_error());


?>
<div style="position:relative; float:left; margin:5% 25% auto; z-index:200;">
<font size="+3" color="#CC0000" style="border:1px 1px #AAAAAA; text-transform:uppercase;">
<?php echo $gname; ?></font>
<font size="+0.8" color="#880000" style="border:1px 1px #0000FF">
(<?php
	echo mysql_num_rows(mysql_query("select * from gp_member WHERE gp_id='$id'"))." ";
  
  ?>
Members)
</font>
</div>

<div id="gcvr" style="position:relative; width:70%; margin:1% 25.1% auto; z-index:9;">
<img src=<?php echo "gp_uploads/".$f['gcover']; ?> height=15%; width="68.35%">
</div>
<input type="button" value="Create new Group" style="margin-left:5%;"  onClick="javascript:document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';document.getElementById('close').style.display='block';"  />

<input type="button" value="Add More People" onClick="javascript:document.getElementById('al').style.display='block';document.getElementById('fade').style.display='block';document.getElementById('clo').style.display='block';" />

              
<a href="javascript:void(0);">
<img src="icons/close1.png" id="clo" class="close_win" onClick="javascript:document.getElementById('al').style.display='none';document.getElementById('fade').style.display='none';document.getElementById('clo').style.display='none';">
</a>
<div id="al" class="white_content">
<?php include('add_mbr.php'); ?></div>





<input type="button" value="Group Settings" <?php if(!$q) echo "disabled";?>  onClick="javascript:document.getElementById('se').style.display='block';document.getElementById('fade').style.display='block';document.getElementById('secl').style.display='block';"  />


              
<a href="javascript:void(0);">
<img src="icons/close1.png" id="secl" class="close_win" onClick="javascript:document.getElementById('se').style.display='none';document.getElementById('fade').style.display='none';document.getElementById('secl').style.display='none';">
</a>
<div id="se" class="white_content">
<?php include('gsttgs.php'); ?></div>

<input type="text" id="amg" onKeyUp="invite(event,this.value,<?php echo $id; ?>,'<?php echo $user_name; ?>')" placeholder="Invite a Member" style="padding:0.5%; margin-left:7%; border-radius:3%; border:1px 1px 1px 1px #0000CC;" />
<div id="fsugg" style="float:left; margin-left:53%; margin-top:-2%; background:#FFC; z-index:2000; cursor:pointer; border:1px solid #000;"></div>



<!-----START OF WHOLE MY FEEDS----->    
<div class="myfeeds" style="margin-top:-1%;">
	<div id=form_share>
    <form method="post" enctype="multipart/form-data" action="mk_gp_pst.php?id=<?php echo $id; ?>&g=<?php echo $gname; ?>" >
	<fieldset id="post"><legend><font size="+1" color="#AAAAAA";><strong>Post Here</strong></font></legend>
		
        <table>
			<tr>
				<td>What you have inside, buddy?</td>
			</tr>
		
    	    <tr>
        		<td>
						<textarea name="share" id="share" placeholder="Share something in this Group" style="resize:none;"rows="5" cols="80"  ></textarea>
				</td>
        	</tr>
		</table>
		<table>
			
			<tr>
				<td><strong>Upload Photos/Videos</strong></td>
				<td><?php input("file","uploads[]","","","","","uploads",true); ?></td>

				<td><?php input("submit","post","Post it!","",false,false,"go",false); ?></td>
			</tr>
		</table>
	
    </fieldset>
    
    
    </form>
	</div>


<?php 
include('shw_gpst.php'); 
?>