// JavaScript Document

function ftch(user)
{
	console.log(user);
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
						document.getElementById('Sug').innerHTML=document.getElementById('Sug').innerHTML+xmlhttp.responseText;
    				}
  				}
			xmlhttp.open("GET","shwgp.php?user="+user,true);
			xmlhttp.send();
		
		
}
function change()
{
	document.getElementById('Sug').innerHTML='<a href="group/cgform.php">Create a Group</a><br/>';
}
