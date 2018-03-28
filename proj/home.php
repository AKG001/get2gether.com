<?php
include("connect.php");
include("function.php");
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];
$pic=$_SESSION['pic'];

?>
<style>
@import "css/posts.css";
@import "css/home.css";
@import "css/uploadphoto.css";
@import "css/lightbox.css";
</style>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<html>
<head>
<title>You are live Now!</title>
</head>
<body>

<?php include("common.php");?>

<div id="Sug" onmouseup="javascript:$('#Sug').css('display','none');" style="position:absolute; height:20%; width:20%; overflow:auto; background:#FFC; text-transform:uppercase; box-shadow:2px 3px #009F55; display:none; border:1px solid #00F; left:55%; top:6%; z-index:3000;">
<input type="button" value="Create My Group" onClick="javascript:document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';document.getElementById('close').style.display='block';" />
<br/></div>

            
<a href="javascript:void(0);">
<img src="icons/close1.png" id="close" class="close_win" onClick="javascript:document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none';document.getElementById('close').style.display='none';">
</a>
<div id="light" class="white_content">
<?php include('cgform.php'); ?></div>
<div id="fade" class="black_overlay"></div>


<!-----START OF WHOLE MY FEEDS----->    
<div class="myfeeds">
	<div id=form_share>
    <form method="post" enctype="multipart/form-data" action="make_post.php" >
	<fieldset id="post"><legend><font size="+1" color="#AAAAAA";><strong>Post Something</strong></font></legend>
		
        <table>
			<tr>
				<td>What you have inside, buddy?</td>
			</tr>
		
    	    <tr>
        		<td>
						<textarea name="share" id="share" placeholder="Share something with others" style="resize:none;"rows="5" cols="80"  ></textarea>
				</td>
        	</tr>
		</table>
		<table>
			<tr>
				<td><strong>Visibility</strong></td>
				<td><?php $option=array("Public","Friends","Private"); select("visibility",false,$option,"",false); ?>
				</td>
			</tr>	

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
if(isset($_GET['p']))
{
	$p=$_GET['p'];
	if($p == 'show_post')
 	include('show_post.php');		/* This is printing new posts as user enters after login or again enters from somewhere */
}
else
{
	include('show_post.php');
}

?>
	</div>
<!-----END OF WHOLE MY FEEDS----->    
<div class="ads" style="float:right; margin-top:50px;margin-right:10px;margin-legt:10px;position:fixed;right:10px;"><iframe src="advertise.php" height="420" width="220">
</iframe> </div>


</body>
</html>