<?php 
include("connect.php");
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];
$curr_pro_user=$_GET['q'];
$qrry=mysql_query("SELECT *  FROM user_info WHERE user_name='$curr_pro_user'");
$fct=mysql_fetch_array($qrry);	
if($curr_pro_user==$user_name)
{
?>
<div class="Edit_pro" onclick="open_light_box('gen_info',700,400)">  <i class="fa fa-pencil "></i> Edit  </div>
<?php
}
?>
<div class="title_About"> <i class="fa fa-user fa-1x"></i><span>  ABOUT</span> </div>
 <div class="content_profile">
 <table class="table_content"> 
 
 	<tr>
    <th>First Name:</th><td><?php echo $fct['first_name'];?></td>		<th>Last Name:</th><td><?php echo $fct['last_name'];?></td>
    </tr>
 	<tr>
    <th>User Name:</th><td><?php echo $fct['user_name'];?></td>		<th>Email:</th><td><?php echo $fct['email'];?></td>
    </tr>
 	<tr>
    <th>City:</th><td><?php echo $fct['city'];?></td>		<th>State:</th><td><?php echo $fct['state'];?></td>
    </tr>
 	<tr>
    <th>Country:</th><td><?php echo $fct['country'];?></td>		
 	</tr>
    <tr>
    <th>Mobile:</th><td><?php echo $fct['mobile_no'];?></td>		<th>Gender:</th><td><?php echo $fct['gender'];?></td>
    </tr>
 	<tr>
    <th>Relationship:</th><td><?php echo $fct['relationship'];?></td>		<th>website:</th><td><?php echo $fct['full_name_link'];?></td>
    </tr>
 
 
 </table>

 </div>
 <hr style="color:#666;width:100%;height:3px; margin-top:20px; margin-bottom:20px; " />
<?php if($curr_pro_user==$user_name)
 {?>
<div class="Edit_pro">  <i class="fa fa-pencil "></i> Edit  </div>
<?php
}
?>


 <div class="Education"> 

<div class="title_About"> <i class="fa fa-trophy fa-1x"></i><span> EDUCATION </span> </div>
 
 <ul>
 <?php if(($fct['college']!=null)&&($fct['college']!=""))
 { ?>
 
 	<li><?php echo "Bachelor's degree of ".$fct['branch']." At <a>".  $fct['college'] ."</a> " ; ?><div class="edu_year">From August 2013 ~ now </div> </li>
 <?php }
 if(($fct['inter_school']!=null)&&($fct['inter_school']!=""))
 { ?>
 	<li><?php echo "Studied   At <a>".  $fct['inter_school'] ."</a> " ; ?><div class="edu_year">From April 2011 ~ March 2013 </div> </li>
 <?php }
 if(($fct['high_school']!=null)&&($fct['high_school']!=""))
 { ?>
 	<li><?php echo "Studied   At <a>".  $fct['high_school'] ."</a> " ; ?><div class="edu_year">From April 2001 ~ March 2011 </div> </li>
 <?php }
 
 ?>
 
 
 
 </ul>
 
 
 </div>
