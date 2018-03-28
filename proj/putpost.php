<form method="post" enctype="multipart/form-data" action="make_post.php"  >
<fieldset id="post" >
<legend><font size="+1" color="#AAAAAA";><strong>Post Something</strong></font></legend>
<table>
<tr>
<td>What you have inside, buddy?</td>
</tr>
<tr><td>
<textarea name="share" id="share" placeholder="Share something with others" style="resize:none;" rows="5" cols="80" ></textarea>
</td></tr>
</table>
<table>
<tr>
<td><strong>Visibility</strong></td>
<td><?php $option=array("Public","Friends","Private"); select("visibility",false,$option,"",true); ?>
</td>
</tr>
<tr>
<td><strong>Upload Photos/Videos</strong></td>
<td><?php input("file","uploads[]","","","","","uploads",true); ?></td>

<td><?php input("submit","post","Post it!","",false,false,"go",false); ?></td>
</tr>
</table>
</fieldset>
</form>