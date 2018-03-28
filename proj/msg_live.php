  <?php
session_start();

if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');
include("connect.php");

$to=$_GET['q'];
$msg_content=$_GET['msg'];
$user_name=$_SESSION['user_name'];
	$user_name=$_SESSION['user_name'];

		$t=date('Y M,d h:i:s A' );
		if(strcmp($to,$user_name)>=0)
		{
			$msg_key=$to.".".$user_name;
		}
		else 
		{	$msg_key= $user_name.".".$to;
		
		}
		
		echo $key;
		$qry=mysql_query("insert into message (send_by,received_by,time,content,msg_id) values ('$user_name','$to','$t','$msg_content','$msg_key') ");
?>
