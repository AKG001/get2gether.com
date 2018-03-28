// JavaScript Document
function chang(value)
{
	document.getElementById('amg').value=value.innerHTML;
}





function invite(e,frnd,gid,by)
{
	var code=(e.keyCode?e.keyCode:e.which);
	
	
		if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  				var xmlhttp=new XMLHttpRequest();
  		}
		else
  		{// code for IE6, IE5
  				var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
				if(code!=13)
				{
					xmlhttp.onreadystatechange=function()
  					{
  						if (xmlhttp.readyState==4 && xmlhttp.status==200)
    						{
								document.getElementById('fsugg').innerHTML=xmlhttp.responseText;
    							console.log(xmlhttp.responseText);
							}
  					}
				
				xmlhttp.open("GET","srch_invite.php?value="+frnd+"&by="+by,true);
				xmlhttp.send();
				}
		
		
		
				else
				{
					if(frnd=="") return;
				xmlhttp.onreadystatechange=function()
  					{
  						if (xmlhttp.readyState==4 && xmlhttp.status==200)
    						{
								document.getElementById('fsugg').innerHTML=xmlhttp.responseText;
								document.getElementById('amg').value="";
							}
  					}
						xmlhttp.open("GET","put_invite.php?for="+frnd+"&id="+gid+"&by="+by,true);
						xmlhttp.send();
	
				}
}
