<html>
<head>
<title>You are live Now!</title>

<?php 
include('function.php'); 
include('connect.php');
?>
<script src="js/jquery.js"></script>
<script src="js/group/invite.js"></script>
<script src="js/group/shwgp.js"></script>
<script src="js/settings.js"></script>
<script src="js/pasval.js"></script>

<!--<script src="js/validate_post.js"></script>
-->
<style>
@import "css/home.css";
@import "css/settings.css";
@import "css/head_bar.css";
</style>

</head>

<body>
<?php
session_start();
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');

echo $user_name=$_SESSION['user_name'];

?>


<form method="post" action="../home.php" >

<!-- HEADER -->
<div id="sse1">
  <div id="sses1">
    <ul>
      <li><a href="home.php?q=show_post">Dashboard</a></li>
      <li><a href="about.php?a=<?php echo $_SESSION['user_name']; ?>">About</a></li>
      <li><a href="profile.php?p=<?php echo $_SESSION['user_name']; ?>">Profile</a></li>
      <li><a href="home.php?q=friends">Friends</a></li>
      <li onClick="ftch('<?php echo $user_name; ?>')"><a href="#">Groups</a></li>
      <li><a href="home.php?q=blogs">Blogs</a></li>
      <li><a href="#">More</a></li>
      
      <li><?php input("text","search_f","","Search friends",false,false,"",false); ?></li>
      <li><?php input("submit","search_per","GO","",false,false,"",false); ?></li>
 	   </form>
       <li><a href="logout.php"> Log out</a></li>
    </ul>
    
  </div>
</div>



<div id="tab">


 <div class="select collapsed" onClick="javascript:$('.mid1').css('display','block');$('.mid2').css('display','none');$('.mid3').css('display','none');">
    <div class="shown" >General Settings</div>
    <div class="option" onClick="javascript:$('#nm').animate({height:'30%'},500);$('#un').animate({height:'10%'},500);$('#pw').animate({height:'10%'},500);$('#em').animate({height:'10%'},500);">Name</div>
    <div class="option" onClick="javascript:$('#nm').animate({height:'10%'},500);$('#un').animate({height:'30%'},500);$('#pw').animate({height:'10%'},500);$('#em').animate({height:'10%'},500);">Delete my all posts</div>
    <div class="option" onClick="javascript:$('#nm').animate({height:'10%'},500);$('#un').animate({height:'10%'},500);$('#pw').animate({height:'35%'},500);$('#em').animate({height:'10%'},500);">Password</div>
    <div class="option" onClick="javascript:$('#nm').animate({height:'10%'},500);$('#un').animate({height:'10%'},500);$('#pw').animate({height:'10%'},500);$('#em').animate({height:'30%'},500);">Email</div>
  </div>
 



 <div class="select collapsed" onClick="javascript:$('.mid1').css('display','none');$('.mid2').css('display','block');$('.mid3').css('display','none');">
    <div class="shown">Security Settings</div>
    <div class="option">Deactivate your account</div>
  </div>
 
 
<div class="pg" onClick="javascript:$('.mid1').css('display','none');$('.mid2').css('display','none');$('.mid3').css('display','block');">Pay get2gether</div>

</div>

<form method="post">
<div class="mid1">
<h3>General Account Settings</h3>
<div id="nm" onClick="javascript:$('#nm').animate({height:'30%'},500);$('#un').animate({height:'10%'},500);$('#pw').animate({height:'10%'},500);$('#em').animate({height:'10%'},500);">
<h4>Change Name</h4>
<table>
<tr><td>First Name:</td><td><input type="text" name="fn" placeholder="Write Your first name" id="fn" /></td>
<td>Last Name:</td><td><input type="text" name="ln" placeholder="Write Your last name" id="ln" /></td></tr>
<tr><td></td><td><input type="submit" name="cngn" placeholder="Change Name" id="cngn" /></td></tr>
</table>
</div>
<div id="un" onClick="javascript:$('#nm').animate({height:'10%'},500);$('#un').animate({height:'30%'},500);$('#pw').animate({height:'10%'},500);$('#em').animate({height:'10%'},500);">
<h4>Delete All my Posts</h4>
Enter your password:
<input type="password" name="dlpw" onKeyUp="checkpass(this.value,'<?php echo $user_name; ?>')" />
<input type="submit" name="uss" value="Delete Now" id="uss"  disabled />
</div>
<div id="pw" onClick="javascript:$('#nm').animate({height:'10%'},500);$('#un').animate({height:'10%'},500);$('#pw').animate({height:'35%'},500);$('#em').animate({height:'10%'},500);">
<h4>Change Password</h4>
<table>
<tr><td>Enter Current password:</td><td><input type="password" onKeyUp="checkpass(this.value,'<?php echo $user_name; ?>')" /></td></tr>
<tr>
<td>Enter New password:</td><td><input type="password" name="npw" id="npw" disabled /></td>
<td>Confirm New password:</td><td><input type="password" name="cnpw" id="cnpw" disabled /></td>
</tr>
<tr><td></td><td><input type="submit" name="pws" value="Change Password" id="pws" disabled /></td></tr>
</table>
</div>
<div id="em" onClick="javascript:$('#nm').animate({height:'10%'},500);$('#un').animate({height:'10%'},500);$('#pw').animate({height:'10%'},500);$('#em').animate({height:'30%'},500);">
<h4>Change Email</h4>
Type Email:<input type="email" name="eem" placeholder="Type new email" id="eem" />
<input type="submit" name="sem" placeholder="Change Email" id="sem" />
</div>
</div>

<div class="mid2">
<h3>Security Settings</h3>
To deactivate your account, 
Click here <span style="color:#00F; cursor:pointer;" onClick="javascript:$('#ddpw').css('display','block');">DEACTIVATE MY ACCOUNT</span><br/>
<div id="ddpw">
Enter Password:<input type="password" name="dapw" placeholder="Enter password" onKeyUp="checkpass(this.value,'<?php echo $user_name; ?>')" />
<input type="submit" name="deactive" value="Deactivate Now" id="deactive" disabled/>
</div>
</div>

<div class="mid3">
<h3>Pay for Services</h3>
<p>Here we are trying to give you our best services through our first version of this site. If you think we should improve something regarding to our websites so please, send us all these through our improvement and pay some money too..'cause it's easy for you to point out mistakes, therefor you need to pay proportional to your problems(ex. 1 problem gonna cost 1k to you), you think, you are facing in this site </p>
</div>

</form>


<?php
if(isset($_POST['cngn']))
{
	extract($_POST);
	$link= "<a href=profile.php?q=".$user_name.">".$fn." ".$ln."</a>";
	mysql_query("update user_info set first_name='$fn', last_name='$ln', full_name_link='$link' WHERE user_name='$user_name'");
}
else if(isset($_POST['uss']))
{
	mysql_query("delete from posts WHERE post_by='$user_name'");
}
else if(isset($_POST['pws']))
{
	extract($_POST);
	$chn=md5($npw);
	mysql_query("update user_info set pass_word='$chn' WHERE user_name='$user_name'");
}
else if(isset($_POST['sem']))
{
	extract($_POST);
	mysql_query("update user_info set email='$eem' WHERE user_name='$user_name'");
}
else if(isset($_POST['deactive']))
{
	mysql_query("update user_info set deactive=1 WHERE user_name='$user_name'");
	header("location:logout.php");
}

?>