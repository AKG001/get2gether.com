var loadFile=function(event){
var preview=document.getElementById('preview');
preview.src=URL.createObjectURL(event.target.files[0]);

};



 var curr;
 
function check_null( a)
{
if(a==""||a==null)
		{
	
			return false;}
else return true;	
}

function validate_sign_up  () {
	// body...
var rsponse;
	var valid=true;
	var minMaxLength = /^[\s\S]{8,32}$/,
        upper = /[A-Z]/,
        lower = /[a-z]/,
        number = /[0-9]/,
        special = /[^A-Za-z0-9]/,
        count = 0;
	// username validation



	var b = /^[A-Za-z0-9]{6,20}$/;
	
	var a=document.sign_up.user_name.value;
	if(a=="" || a==null)
	{changeclass();
		$('.msg').html("Please Fill Username");
	return false;
	
	}
	
		 if(!b.test(a))
 	{
changeclass();
	$('.msg').html("Username must contain atleast 6 Alpha Numeric Characters");
	return false;
	}
   
	 a=document.sign_up.pass_word.value;
	 if(a=="" || a==null)
	{changeclass();
		$('.msg').html("Please Fill Password");
	return false;
	
	}
	
	else if (minMaxLength.test(a)) {
        // Only need 3 out of 4 of these to match
        if (upper.test(a)) count++;
        if (lower.test(a)) count++;
        if (number.test(a)) count++;
        if (special.test(a)) count++;
    }
	if(count<2)
	{changeclass();
		$('.msg').html("Password Too Weak");
	return false;
	}
re_pass=document.sign_up.pass_word_confirm.value;
	
	
	
	if(re_pass!=a)
		{changeclass();
			$('.msg').html("Password Doesn't Match");
	return false;
	
}

a=document.sign_up.email.value;
b=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i; 
	
if(!b.test(a))
	{changeclass();
		$('.msg').html("Invalid Email ");
	return false;
	
valid=false;
}
a=document.sign_up.mobile_no.value;
b=/^9[0-9]{9,9}/;
c=/^8[0-9]{9,9}/;
d=/^7[0-9]{9,9}/;
if(!b.test(a) && !c.test(a) && !d.test(a))
{changeclass();
	$('.msg').html("Invalid Mobile no");
	return false;
}

else{var valid=false;
	$('.register').css("opacity",.5);
	
		 $('.result').load("validate_user.php?user="+document.sign_up.user_name.value+"&email="+document.sign_up.email.value,function(){
			 $('.register').css("opacity",1);
								 rsponse=$('.result').html();
								 	if(rsponse=='2')
									{changeclass();
										$('.msg').html("Username Already Exists! Choose Another");
									return false;
									}	
									if(rsponse=='3')
									{changeclass();
										$('.msg').html("User Exists with this Email Address");
									return false;
									}
									if(rsponse=='1')
									{close_notice();
									changereg();
									}
						
								 
});	
		
												
					
		
		

		


			}


}






//--------------Switch Log In / sign Up-------------

$('.switch').click(function(){
close_notice();
	if((curr!='log')&&(curr!=null))
	
	{ 
				
	$(this).children('i').toggleClass('fa-pencil');
			$('.login').animate({height: "toggle", opacity: 1}, "slow");
   			if(curr=='register')
   			{	
				
			$('.register').animate({height: "toggle", opacity: 0}, "slow");
			}
			else if(curr=='Step')
			{
							
		  			$('.Step').animate({height: "toggle", opacity: 0}, "slow");    
		 	}
			else {
				$('.pic_section').animate({height: "toggle", opacity: 0}, "slow");
				
				}
	curr='log';
		
	}  
	else {
		   curr='register';
   			$(this).children('i').toggleClass('fa-pencil');
   			$('.login').animate({height: "toggle", opacity: 0}, "slow");
   			
			$('.register').animate({height: "toggle", opacity: 1}, "slow");
		}
}
);

function changereg()
{
	curr='Step';
   $('.register').animate({height: "toggle", opacity: 0}, "slow");
   $('.Step').animate({height: "toggle", opacity: 1}, "slow");
	
}


//-------------- Proceed To Next Step ------------Section///
$(".proceed").click(function(){
	
validate_sign_up();

	
		
});


//-------------- Proceed To Pic section ------------Section///
$(".proceed_2").click(function(){

	{
		curr='pic_section';
   $('.Step').animate({height: "toggle", opacity: 0}, "slow");
   $('.pic_section').animate({height: "toggle", opacity: 1}, "slow");
}
});



//--------------Click on  Cross Alert ------------Section/// 

function close_notice(){
   $('.fa-times-circle').animate({height: 0, opacity: 0}, 600);
   $('.alert').animate({height: 0, opacity: 0}, 600);
   setTimeout(function(){$('.fa-times-circle').css("display","none");
	  $('.msg').css("display","none");
	 	
	  $('.alert').css("display","none");
	},500);
   
}

///////----------Function to change class of alert
function changeclass()
{
$('.msg').css("display","block");
	$('.fa-times-circle').css("display","block");
	$('.alert').css("display","block");

	$('.alert').animate({height: 30, opacity: 1}, "fast");
   
   $('.fa-times-circle').animate({height: "auto", opacity: 1}, "fast");
   
  }



