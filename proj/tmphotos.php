<head>
<script src="js/jquery.js"></script>
<style>
@import "css/tmphotos.css";
</style>
</head>
<?php
include('connect.php');

session_start();
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');
$user_name=$_SESSION['user_name'];
$pers=$_GET['q'];

$pt=mysql_query("select * from posts WHERE post_by='$pers' ORDER BY time DESC");
?>

<div id="uplpts">
<div id="navp"><span onclick="javascript:$('#yourup').css('display','block');$('#yourdp').css('display','none');" id="yu">Uploads</span><span onclick="javascript:$('#yourup').css('display','none');$('#yourdp').css('display','block');" id="yu" id="ypp">Profile Pictures</span></div>



<div id="yourup">
<?php
while($pts=mysql_fetch_array($pt))
{
	

$e=$pts['post_id'];	
	
$a=mysql_query("select * from attachments WHERE post_id='$e'") or die(mysql_error());

while($att=mysql_fetch_array($a))
{
	?>
	<img src="post_uploads/<?php echo $att['attached']; ?>" />
	
	<?php
	
}
}
?>
</div>


<div id="yourdp">
<?php
$pt=mysql_query("select pic from user_info WHERE user_name='$pers'");


while($pts=mysql_fetch_array($pt))
{
	
	?>
	<img src="users/profile/<?php echo $pts['pic']; ?>" />
	<?php
}

?>
</div>
</div>