<style>
.outer_in_lb:hover
{
background-color:#EAEAEA;	
}
.outer_in_lb a
{
display: inline;
font-family: 'Open Sans', arial;
	text-decoration:none;
float:left;
line-height: 23px;
	font-size:16px;
	vertical-align:middle;
	color:#1A6640;
		
}
.bonding
{
top:0px;
float:right;
color: rgb(147, 155, 162);
display: inline;
font-family: 'Open Sans', arial;
font-size: 11.3999996185303px;
font-style: italic;
font-weight: normal;
height: auto;
line-height: 23px;
text-align: left;
text-transform: capitalize;	
	
}
.outer_in_lb
{
width:100%;
padding:3px;
height:30px;
cursor:pointer;	
}
.outer_in_lb img 
{height:28px;
float:left;
}

</style>


<?php
include("connect.php");
$q=$_GET['q'];
	$QRYi=mysql_query("SELECT user_info.pic,friend_request.bonding,user_info.user_name,user_info.full_name_link FROM user_info INNER JOIN friend_request ON (friend_request.accept=1 AND ((friend_request.send_by ='$q' AND friend_request.received_by =user_info.user_name) OR ( friend_request.received_by='$q' AND friend_request.send_by =user_info.user_name) )) ORDER BY friend_request.bonding DESC  ")or die (mysql_error()) ;
$max=0;
while($Frr=mysql_fetch_array($QRYi))
{if($max==0)$max=$Frr['bonding'];
?>

<a href="profile.php?q=<?php echo $Frr['user_name'];?>"><div class="outer_in_lb"><img src="<?php echo"users/profile/".$Frr['pic']; ?>"/>&nbsp;&nbsp;
<div><?php echo $Frr['full_name_link'];?> </div><div class="bonding">Bonding <?php echo (floor(($Frr['bonding']/$max)*100));?>% </div>
 </div>
</a>
<?php
}
	?>




