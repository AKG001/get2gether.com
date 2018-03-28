
function validate_sign_in  () {
	// body...
	var a=document.sign_in.user_name.value;
	if(a==""||a==null)
		{
	changeclass();
	$('.msg').html("Please Fill User Name");
		document.sign_in.user_name.focus();
			return false;}
	else  
	{
		a=document.sign_in.pass_word.value;
	
		if(a==""||a==null)
		{	changeclass();
	$('.msg').html("Please Fill Password");
	
			return false;
		}
		else return true; 
	}


}
