// JavaScript Document
var chat_friends=0;
function fetch_friend(){ $('.friend_bar').load("fetch_friends.php");}
setInterval(fetch_friend(),2000);
fetch_friend();

			
function chat_send_msg_live(to,msg_content)
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



function message_typing(ky,typing_id)
{
	if((ky.keyCode === 13)&&(ky.shiftKey!=true))
		{
         	if($(typing_id).val()!="\r" && $(typing_id).val()!=null)
					 chat_send_msg_live($(typing_id).next().val(),$(typing_id).val());		 
			$(typing_id).val("");
		}
        return false;
}
setInterval(function(){
	if(chat_friends>0)
	{
		
		$('.new_div').each(function(index, element) {
         var refresh_chat_id=$(element).attr('id');
       		$('#msg'+refresh_chat_id).load("chat_msgs.php?q="+refresh_chat_id,function(){
				$('#msg'+refresh_chat_id).scrollTop($('#msg'+refresh_chat_id)[0].scrollHeight); 		
				
				});
	    });		
		
	}
},2000);



function open_chat(curr_user){	
var chat_id=$(curr_user).children('.chat_id').val();	
	var check=document.getElementById(chat_id);
	if(check==null)
	{var newdiv =document.createElement('div');
	newdiv.className = "new_div";
	$(newdiv).attr("id",chat_id);
	$('#chatting').append(newdiv);
	$('#'+chat_id).load("chatlayout.php?q="+chat_id,function(){
			$('#msg'+chat_id).load("chat_msgs.php?q="+chat_id,function(){
					chat_friends++;$('#msg'+chat_id).scrollTop($('#msg'+chat_id)[0].scrollHeight);
			});
		});
	}
}

function close_chat_box(curr_user_close){
	chat_friends--;
		document.getElementById('chatting').removeChild(curr_user_close);
	}