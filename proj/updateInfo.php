<?php
include("connect.php");
include("function.php");
session_start();
if(($_SESSION['user_name']=="" )or( $_SESSION['user_name']==null) ) header("location: index.php");
$user_name=$_SESSION['user_name'];

 $qrry=mysql_query("SELECT * FROM user_info WHERE user_name='$user_name'");
$fct=mysql_fetch_array($qrry);
	
?>
<div class="load_inner">
<form method="GET" action="updateInfo.php" >
	
 <table class="table_content"> 
 
 	<tr>
    <th>First Name:</th><td><input type="text" name="first_name" value="<?php echo $fct['first_name'] ?>" /> </td>		<th>Last Name:</th><td><input type="text" name="last_name" value=" <?php echo $fct['last_name'];?>" /></td>
    </tr>
    
 	<tr>
    <th>User Name:</th><td><?php echo $fct['user_name'];?></td>		<th>Email:</th><td><input type="email" name="email" value="<?php echo $fct['email'];?> " /></td>
    </tr>
 	
    <tr>
    <th>City:</th><td><input type="text" name="city" value="<?php echo $fct['city'];?> " /></td>		<th>State:</th><td><input type="" name="state" value="<?php echo $fct['state'];?> " /></td>
    </tr>
 	
    <tr>
    <th>Country:</th><td><input type="text" name="country" value=" <?php echo $fct['country'];?>" /></td>		
 	</tr>
    <tr>
        <th>Mobile:</th><td><input type="text" name="mobile_no" value="<?php echo $fct['mobile_no'];?> " /></td>		<th>Gender:</th><td><input type="text" name="gender" value=" <?php echo $fct['gender'];?>" /></td>
    </tr>
 	
    <tr>
    <th>Relationship:</th><td><input type="text" name="relationship" value=" <?php echo $fct['relationship'];?>" /></td>		
    </tr>

 </table>
 <input type="submit" name="go" value=" Update "/>
 
</form>
 </div>
 <?php
 extract($_GET); 
	$temp='<a href="profile.php?q=$user_name">'.$first_name." ".$last_name.'</a>';
 if(isset($go))
 {
 	 {
	
		mysql_query("UPDATE  user_info SET email='$email' , first_name='$first_name' , last_name= '$last_name' , gender= '$gender' , mobile_no= '$mobile_no' ,country='$country',state='$state',city='$city',relationship='$relationship',full_name_link='$temp' WHERE user_name='$user_name' ")or die (mysql_error()) ;	
	
		 echo $user_name.$last_name;
		 
		 header("location:profile.php");
		}
	 
	 
	 
	}
 
 ?>