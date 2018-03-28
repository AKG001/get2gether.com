// JavaScript Document
			var identify=0,curr_user;
	function showthread(url,id)		
{	
$('#front').load(url,function(){
				$('#conversation').scrollTop($('#conversation')[0].scrollHeight); 		
});	

}			
function send_msg_live(to,msg_content)
{
	var ajaxObject =null;
if(window.XMLHttpRequest)
	ajaxObject = new XMLHttpRequest();
else if(window.ActiveXObject)
ajaxObject = new ActiveXObject("Microsoft.XMLHTTP");
if(ajaxObject != null)
{
ajaxObject.open("GET","msg_live.php?q="+to+"&msg="+msg_content,true);
ajaxObject.send();
return true;	
} 
else alert("You do Not have a Compatible Browser");


	
	
}			
			
			
			
function handle(e,id){
		if((e.keyCode === 13)&&(e.shiftKey!=true))
		{
			
          send_msg_live(curr_user,id.value);
		 		 {
					 
					$(id).val("");					
					
				
				}
				 
			
		}

        return false;
    }		
			
		setInterval(function(){
				if(identify==1)
				{var url="msgby.php?q="+curr_user;		  
		var y=showthread(url); 
			
				}
			},5000);
		
		
			function clicked_thread(user_to)
			{
				console.log("dsf");
				$('#front').css("display","inline-block");
				$('#message_textarea').css("display","inline-block");
			$('#back').css("display","inline-block")
		
			$('#message_textarea').animate({opacity:.85},2000);
			$('#front').animate({opacity:.85},2000);
			$('#back').animate({opacity:.85},2000);
		identify=1;
			curr_user=user_to;	
		var url="msgby.php?q="+curr_user;		  
		console.log(url);
		var y=showthread(url); 
			
				
			}
			
			
			$('.thread').click(function(){
			
		clicked_thread($(this).children(".thread_id").val());		
			
		});

function hide_thread()
{identify=0;
	curr_user=null;
	$('#front').animate({opacity:0},500);
	$('#back').animate({opacity:0},500);
	$('#message_textarea').animate({opacity:0},500);
	
		
	setTimeout(function(){
		$('#message_textarea').css("display","none");
	$('#front').css("display","none");
	$('#back').css("display","none");	
		
		},490);

}

 $('#back').click(function(){hide_thread();});
$('#close').click(function(){hide_thread();});
