// JavaScript Document
function checkpass(pass,user)
{
	
	if (window.XMLHttpRequest)
  				{// code for IE7+, Firefox, Chrome, Opera, Safari
  					var xmlhttp=new XMLHttpRequest();
  				}
			else
  				{// code for IE6, IE5
  				var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  				}
			xmlhttp.onreadystatechange=function()
  				{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    				{
						if(xmlhttp.responseText=="match")
						{ 
							document.getElementById('uss').removeAttribute('disabled');
							document.getElementById('npw').removeAttribute('disabled');
							document.getElementById('cnpw').removeAttribute('disabled');
							document.getElementById('deactive').removeAttribute('disabled');
						}
						else 
						{
							document.getElementById('uss').setAttribute('disabled','disabled');
							document.getElementById('npw').setAttribute('disabled','disabled');
							document.getElementById('cnpw').setAttribute('disabled','disabled');
							document.getElementById('deactive').setAttribute('disabled','disabled');
						}console.log(xmlhttp.responseText);
					}
  				}
			xmlhttp.open("GET","valpas.php?pass="+pass+"&user="+user,true);
			xmlhttp.send();
		
	
}

setInterval(function(){
if($('#npw').val()==$('#cnpw').val() && $('#cnpw').val()!="")
{
	document.getElementById('pws').removeAttribute('disabled');
}
},1000);
