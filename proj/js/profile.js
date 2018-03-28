// JavaScript Document
var reld=0;
function open_light_box(key,width,height){
			 //for refresf
				$('.lightbox_front').css("width",width);
				$('.lightbox_front').css("height",height);
				$('.lightbox_front').css("margin-left","-"+width/2);
				
				$('.close_light_box').css("margin-left",width-20);
				
		
			$('.lightbox_front').fadeIn(1000);
			$('.lightbox_back').fadeIn(1000);
		
	if(key=='upl')
				{reld=1;
					$('.light_box_content').load("image_cutter.php");
				}
	else if(key=='slg')
				{reld=1;
					$('.light_box_content').load("slogan.php");
				}
			
	else if(key=='frn'){
		$('.light_box_content').load("friends_light_box.php?q="+$('.update_id').val());
		}
	
	else if(key=='gen_info'){
		$('.light_box_content').load("updateinfo.php");
		}
	
	
		}
		function accept_request(){
			
		$('.Updated').load("request_manipulation.php?action=accept&send_by="+$('.update_id').val());	
			location.reload();
	}
	function cancel_request(){
			
		$('.Updated').load("request_manipulation.php?action=cancel&send_by="+$('.update_id').val());	
			location.reload();
	}
	function reject_request(){
			
		$('.Updated').load("request_manipulation.php?action=reject&send_by="+$('.update_id').val());	
				location.reload();
	}	
		
		
	function send_request()
	{
		$('.Updated').load("send_request.php?req_name="+$('.update_id').val());	
				location.reload();
		
		
	}
	function msg_open()
	{
		console.log( $('.update_id').val())
	clicked_thread($('.update_id').val());	
	}
		
	function update_slogan()
	{
		var url= "up_slogan.php?q="+$('.update_id').val()+ "&" + "v="+$('.sloagan_editor').val();
		$('.sloagan_editor').val("");
		var ajaxObject =null;
if(window.XMLHttpRequest)
	ajaxObject = new XMLHttpRequest();
else if(window.ActiveXObject)
ajaxObject = new ActiveXObject("Microsoft.XMLHTTP");
if(ajaxObject != null)
{
ajaxObject.open("GET",url,true);
ajaxObject.send();
alert("Updated");
return true;	
} 
else alert("You do Not have a Compatible Browser");


	
	
		
	}

function hide_light_box()
{		
$('.lightbox_front').fadeOut(1500);
			$('.lightbox_back').fadeOut(1500);
if(reld==1)
	{reld=0;
		location.reload();
	}
		
}
function load_timeline()
{
$('.load_inner').load("post_by_profile.php?q="+$('.update_id').val());
	
}


function load_about(){
$('.load_inner').load("about.php?q="+$('.update_id').val());
}
load_about();