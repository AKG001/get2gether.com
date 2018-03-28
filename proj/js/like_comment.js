
// JavaScript Document

/* SCRIPT TO FETCH COMMENTS AND ATTACHMENTS FROM DATABASE CONTINOUSLY */

$(document).ready(function(){
	
	
var no=$('#feeds').attr('class');

for( var i=1;i<=no;i++)
{
	var id=document.getElementById('help'+i).getAttribute('class');
	var user=document.getElementById('help'+i).value;
	console.log(id,user);	
	 $.ajax({url:"chklike.php?id="+id+"&user="+user, success: function(result){
		 		if(result==1)
				{
							$('#'+id+'like').toggleClass('like-active');
    						$('#'+id+'like').next().toggleClass('hidden');				 

				}
    }});
/*
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
					if(xmlhttp.responseText==1)
						{
	$('#'+id+'like').toggleClass('like-active');
    						$('#'+id+'like').next().toggleClass('hidden');						console.log("aaaaaaaaa");	 
						}
    				}
  				}
			xmlhttp.open("GET","chklike.php?id="+id+"&user="+user,true);
			xmlhttp.send();
*/		
}











	
	

	setInterval(function(){
    	var no=$('#feeds').attr('class');	
		for(var i=1;i<=no;i++)
		{
			var id=document.getElementById('help'+i).getAttribute('class');
			var user=$('#help'+i).val();
		
			$('#comments'+i).load("fetch_comments.php?id="+id);
				
		}
				
	},250);



});






/* SCRIPT TO SEND THE LIKED BY INFORMATION */

function likee(id,x,liker)
{
    $(x).toggleClass('like-active');
    $(x).next().toggleClass('hidden'); 

			if (window.XMLHttpRequest)
  				{// code for IE7+, Firefox, Chrome, Opera, Safari
  					var xmlhttp=new XMLHttpRequest();
  				}
			else
  				{// code for IE6, IE5
  				var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  				}
		
			xmlhttp.open("GET","like.php?id="+id+"&liker="+liker,true);
			xmlhttp.send();
		}

