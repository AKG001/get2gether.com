<?php
include("connect.php");

session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];

$frnd_name=$_GET['req_name'];
$t=date('l jS \of F Y h:i:s A');
$q=mysql_query("insert into friend_request (send_by,received_by,request_time) values('$user_name','$frnd_name','$t')"); 
if($q)
{
	?>
<script type="text/javascript">
alert("Request Sent");
window.location="home.php";
</script>
<?php
}
else 
{
?>
<script type="text/javascript">
alert("Failed");
</script>
<?php
} 

?>