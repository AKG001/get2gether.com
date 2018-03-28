<script type="text/javascript">
$(document).ready(function() {
	
	setInterval(function(){	
	
	$('.memb').each(function(){
		
		var mem=$('#infor').val();
		var id=$('#infor').attr('class');
		
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
						console.log(xmlhttp.responseText);
						$('.memb').attr('value',xmlhttp.responseText);
						/*$('#memb').setAttribute('disabled','disabled');*/
					}
  				}
			xmlhttp.open("GET","chkmbr.php?mem="+mem+"&id="+id,true);
			xmlhttp.send();
		
	
	});
	
	},2000);
    
});

function sen(b,mbr,by,id)
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
						b.value="Asked for Membership";
						b.setAttribute('disabled','disabled')
					}
  				}
			xmlhttp.open("GET","put_invite.php?for="+mbr+"&by="+by+"&id="+id,true);
			xmlhttp.send();
		
}
</script>
<?php


include('connect.php');

$QRY=mysql_query("SELECT user_info.pic,user_info.user_name,user_info.full_name_link FROM user_info INNER JOIN friend_request ON (friend_request.accept=1 AND ((friend_request.send_by ='$user_name' AND friend_request.received_by =user_info.user_name) OR ( friend_request.received_by='$user_name' AND friend_request.send_by =user_info.user_name) )) ORDER BY friend_request.bonding DESC ")or die (mysql_error()) ;

while($f=mysql_fetch_array($QRY))
{
	echo $f['full_name_link'];
	?><input type="button" class="memb" value="Add as Member" onClick="sen(this,
	'<?php echo $f['user_name'];?>',
	'<?php echo $user_name; ?>',
	<?php echo $_SESSION['id']; ?>)">
	<input type="hidden" value=<?php echo $f['user_name']; ?> class=<?php echo $_SESSION['id']; ?> id="infor" />
    <?php	
}

?>