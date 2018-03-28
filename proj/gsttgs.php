<?php

$option=array("Public","Friends","Private");

$q=mysql_fetch_array(mysql_query("select * from groups WHERE gname='$gname' AND gcreator='$user_name'"));
?>
<form method="post">
<table>
<tr><th>Change Basic Permissions</th></tr>
<tr>
<td>View Topics</td>
<td>
<?php select("vt",false,$option,$q['vt']."<br/>---<br/>",false); ?>
</td>
</tr>
<tr>
<td>View Posts</td>
<td><?php select("vp",false,$option,$q['vp']."<br/>---<br/>",false); ?>
</td>
</tr>
<tr>
<td>Who can join this group?</td>
<td><?php select("join",false,$option,$q['join']."<br/>---<br/>",false); ?></td>
</tr>
<tr>
</table>
<input type="submit" name="sub" value="Update Settings">
</form>

<?php
if(isset($_REQUEST['sub']))
{
	extract($_REQUEST);
		
if($vt=="") $vt=$q['vt'];  
if($vp=="") $vp=$q['vp'];
if($join=="") $join=$q['join'];

mysql_query("update groups set vt='$vt',vp='$vp',join='$join' WHERE gname='$gname' ") or die(mysql_error());	

}
?>