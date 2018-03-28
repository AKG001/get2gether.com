<?php
include ("connect.php");
session_start();
if($_SESSION['user_name']!=null)
header("location: home.php");


?>


<?php
include("function.php");
 ?>
 
<script src="js/jquery.js"></script>
<script src="js/validate.js"></script>

<script src="js/slider.js"></script>
<?php
//msg print
function print_msg($var)
{
	if($var!="")
	{
		?>
    	<script type="text/javascript">
		
		
		changeclass();
    	</script>
		<?php
		}
	echo $var;
	}
?>

<?php
// ----------LOG IN------------- 



	if(isset($_POST['sign_in']))
	{	
	extract($_POST);

	$last_user=$user_name;
		if($user_name==null or $pass_word==null )
			{
			$msg=" Please Fill all Fields !! ";

		}
	else {
		
		// Queries Regarding match in database or not;
		
		
	$qry=mysql_query("select user_name,pass_word,user_key,pic from user_info ");
	$num=mysql_num_rows($qry);
	if($num>0)
	{
			while($f=mysql_fetch_array($qry))
				{
					if(($f['user_name']==$user_name) and ($f['pass_word']==MD5($pass_word)))
					{$_SESSION['user_name']=$user_name;
					$_SESSION['user_key']=$f['user_key'];
					$_SESSION['pic']=$f['pic'];
					
					header("location: home.php");
						
						}	
				}	
		$msg="Username or Password does not exist";
		
	}	
		
		
		
		
		}
	
	
	
	}




?>
<?php

//-----------------Sign Up------------
if(isset($_POST['sign_up']))
{
extract($_POST);
// ----validate---
//----session----
$pic_name=$_FILES['pic']['name'];
$temp=time().$pic_name;
$source_name=$_FILES['pic']['tmp_name'];
$destination="users/profile/";
$destination=$destination.$temp;
move_uploaded_file($source_name,$destination);

$pass_word=MD5($pass_word);

$pic=$temp;
$q=mysql_query("insert into user_info (user_name,pass_word,email,birth_date,high_school,inter_school,college,branch,year,pic,first_name,last_name,gender,mobile_no,country,state,city,relationship) values('$user_name','$pass_word','$email','$birth_date','$high_school','$inter_school','$college','$branch','$year','$pic','$first_name','$last_name','$gender','$mobile_no','$country','$state','$city','$relationship')") ;


	
	
	if($q) {echo "created ".$pic ;  }
	else echo "fault";
	
	
}





?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flat Login Form 2.0</title>
    
    
  
    <link rel='stylesheet prefetch' href='http://daneden.github.io/animate.css/animate.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>
        <link rel="stylesheet" href="css/style.css">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    
    
    
  </head>

  <body>
  
    <div class='info'>
  <h1>Login</h1>
   </div>
<div class='form aniamted bounceIn'>
  <div class='switch'>
    <i class='fa fa-pencil fa-times'></i>
    <div class='tooltip'>Click Me</div>
  </div>
  <div class='login'>
    <h2>Login To Your Account</h2>
  
     <div class='alert-before'>
      <div class='fa fa-times-circle-before'></div>
  <div class="msg"><?php print_msg($msg);?></div> 
    </div>
 
    <form name="sign_in" method="post" onSubmit="return(validate_sign_in());"> 
 
  
  
   <?php 
   input("text","user_name",$last_user,"Username",false,true,"user_name");
   input("password","pass_word","","Password",false,true,"pass_word");
  
   ?>
  <input type="submit" name="sign_in" class="SignIn" value="Sign In" />
     </form>
 
  </div>
  <div class='register'>
   
    <h2>Create An Account </h2>
     <div class='alert-before'>
      <div class='fa fa-times-circle-before'></div>
  <div class="msg"><?php print_msg($msg);?></div> 
    </div>
 
   <form method="post" runat="server" name="sign_up" enctype="multipart/form-data">			<?php 
   					input("text","user_name",$last_user,"Username",true,true,"user_name");
   					input("password","pass_word","","Password",true,true,"pass_word");
   					input("password","pass_word_confirm","","Confirm Password",true,true,"pass_word_confirm");
   					input("email","email",$last_email,"Email address",true,true,"email");
					input("tel","mobile_no","","Mobile No",true,true,"mobile_no");
					
	        ?>
            <input type="date" name"birth_date"  placeholder="Date Of Birth" class= "birth_date" required />
            
                  <input type="button" name="step1" value="Proceed" class="proceed"/>
   
  
  
  
  
  </div>
<div class="Step">
  
    <h2>Location and Education Details</h2>
    <div class='alert-before'>
      <div class='fa fa-times-circle-before'></div>
      <div class="msg"><?php print_msg($msg);?></div> 
    </div>
   			<?php 
   					input("text","country","","Country(*required)",true,true,"");
   					input("text","state","","State(*required)",true,true,"");
   					input("text","city","","City(*required)",true,true,"");
									
					input("text","high_school","","High School(*optional)",false,true,"");
   					input("text","inter_school","","Inter School(*optional)",false,false,"");
   					input("text","college","","College(*optional)",false,false,"");
   					input("text","branch","","Branch(*optional)",false,false,"");
   					$yr=range(1980,date('Y')+10);
					select("year",false,$yr,"Passout Year",false);
											
				?>
        
        	<input type="button" name="step2" value="Proceed" class="proceed_2"/>
                 
 </div>
  
<div class="pic_section">
  
    <h2>Almost done</h2>
    <div class='alert-before'>
      <div class='fa fa-times-circle-before'></div>
      <div class="msg"><?php print_msg($msg);?></div> 
    </div>
   		
        <img src="default/Dp.jpg" id="preview"  />
        <input type="file" accept="image" name="pic" value="Upload" onchange="loadFile(event)" />
       	
        <?php
		    input("text","first_name","","First Name",true,true,"first_name");
		input("text","last_name","","Last Name",true,true,"last_name");
		$gndr=array("Male","Female");
		$r_status=array("Single","In a Relationship","its Complicated","Married","Divorced","Engagged");
		
		select("gender",false,$gndr,"I am",true);
		select("relationship",false,$r_status,"Status",true);
		
		input("checkbox","terms"," I agree terms and conditions","",true,false,"terms");
				
		
		?>  I agree the terms and conditions
            <input type="submit" name="sign_up" value="create profile" class="proceed_3"/>
        
        </form>
  
 	</div>
 





 
  <footer>
    <a href='http://andytran.me'>Forgot Password?</a>
  </footer>
</div>
 
  
  
 
 
     <script src="js/jquery.js"></script>
      <script src="js/slider.js"></script>

    
    
    
  </body>
</html>




