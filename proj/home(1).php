<?php
include("connect.php");

session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];

;
$pic=$_SESSION['pic'];

?><html>
<head>
<title>You are live Now!</title>
</head>
<script src="js/jquery.js"></script>

<script src="js/rotator.js"></script>
<style>
@import "css/home.css";
@import "css/rotator.css";



</style>
<body>
<form method="post" action="home.php?q=search">
<div id="sse1">
  <div id="sses1">
    <ul>
      <li><a href="home.php">Dashboard</a></li>
      <li><a href="about.php?a=<?php echo $_SESSION['user_name']; ?>">About</a></li>
      <li><a href="profile.php?p=<?php echo $_SESSION['user_name']; ?>">Profile</a></li>
      <li><a href="home.php?q=friends">Friends</a></li>
      <li><a href="home.php?q=blogs">Blogs</a></li>
      <li><a href="#">More</a></li>
      
      <li><input type="text" name="search_f" placeholder="Search friends" /></li>
      <li><input type="submit" name"search_friend" value="Go" /></li>
 	   </form>
       <li><a href="<?php   ?>"> Log out</a></li>
    </ul>
    
  </div>
</div>
<div class="navigator">
<div class="a">  <img src="icons/white_message.png" /></div>
<div class="b">  <img src="icons/white_friend.png" /> </div>
<div class="c">  <img src="icons/white_group.png" /> </div>
<div class="d">  <img src="<?php echo"users/profile/$pic" ?>" /> </div>
<div class="e">  <img src="icons/white_settings.png" /></div>
<div class="f">  <img src="icons/white_home.png"  /> </div>
</div>
<div class="result">

<?php
if(isset($_GET['q']))
{
$q=$_GET['q'];	
if($q=='search')
{
	include('fetch_result.php');
}
?>


<?php
if($q=='friends')
{
?>
<iframe src="show_friend.php">
</iframe>
<?php
}
}
?>
</div>

</body>
</html>
