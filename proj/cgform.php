<script src="js/jquery.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/uploadphoto.js"></script>
<script type="text/javascript">

function validate(value,by)
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
						document.getElementById('gmatch').innerHTML=xmlhttp.responseText;
    				}
  				}
			xmlhttp.open("GET","gnamechk.php?value="+value+"&by="+by,true);
			xmlhttp.send();
}
 

</script>

<link rel="stylesheet" href="../css/group/uploadphoto.css" />




<form method="post" enctype="multipart/form-data" id="cgroup" action="mkg.php">
<table>
<tr>
<td>Group Name:</td>
<td><input type="text" name="gname" placeholder="ex.the coolest group" required id="gname" onkeyup="validate(this.value,'<?php echo $user_name; ?>')"></td>
<td><div id="gmatch"></div></td>
</tr>
<tr>
<td>Group Description:</td>
<td><textarea name="gdesc" rows="5" cols="20"></textarea></td>
</tr>
<tr>
<td>Upload Group Cover Photo:</td>
<td>
<div class="file-upload">
  
  <div class="image-upload-wrap">
    <input class="file-upload-input" name="gphoto" type='file' onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>



</tr>
<tr>
<td> Basic Permissions:</td>
</tr>
<tr>
<td>View Topics:</td>
<td>
<select name="vt"> 
<option value="Public">Public</option>
<option name="Friends">Friends</option>
<option name="Private">Private</option> 
</select>
</td>
</tr>
<tr>
<td>View Posts:</td>
<td>
<select name="vp"> 
<option value="Public">Public</option>
<option name="Friends">Friends</option>
<option name="Private">Private</option> 
</select> 
</td>
</tr>
<tr>
<td>Who can join this Group:</td>
<td><select name="join"> 
<option value="Public">Public</option>
<option name="Friends">Friends</option>
<option name="Private">Private</option> 
</select></td>
</tr>
<tr><td><input type="submit" name="cg" value="Create Group" /></td></tr>
</table>
</form>
