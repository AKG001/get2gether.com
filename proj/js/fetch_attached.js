<style>
#slider
{
	width:700px;
	height:700px;
}
#left
{
	position:absolute;
	
	top:200px;
	width:100px;
	height:100px;
}
#right
{
	
	position:absolute;
	top:200px;

	left:700px;
	width:100px;
	height:100px;

}
</style>
<script src="../Project/js/jquery.js"></script>
<script type="text/javascript">



var my=setInterval(function ()
{
	var pic =document.getElementById('image');
	console.log(pic.src);
var x=new XMLHttpRequest;
x.onreadystatechange=function()
{
	if(x.readyState==4 && x.status==200)
	{
		pic.src="post_uploads/"+x.responseText;
	}
}
console.log("upload.php?x=0&pic="+pic.src);
x.open("GET","upload.php?x=0&pic="+pic.src,true);
x.send();
}
,2000);



function func(x1)
{
	var pic =document.getElementById('image');
	console.log(pic.src);
var x=new XMLHttpRequest;
x.onreadystatechange=function()
{
	if(x.readyState==4 && x.status==200)
	{
		pic.src="post_uploads/"+x.responseText;
	}
}
console.log("upload.php?x="+x1+"&pic="+pic.src);
x.open("GET","upload.php?x="+x1+"&pic="+pic.src,true);
x.send();
}


</script>
<?php
//if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
//header('location:index.php');
//include('connect.php');
mysql_connect("localhost","root","");
mysql_select_db("get2gether");
//$user_name=$_SESSION['user_name'];

?>
<div id="slider">
<?php
$q=mysql_query("select * from attachments where post_id=1437213187 ");
$pic=mysql_fetch_array($q);
$p=$pic['attached'];


?>

<img src="post_uploads/<?php echo $p; ?>" id="image" width="40%"  />

<div id="left" style="z-index:3;" onclick="func(-1)">
<img src="lightbox2-master/dist/images/prev.png" />
</div>
<div id="right" style="z-index:3;" onclick="func(1)">
<img src="lightbox2-master/dist/images/next.png" />
</div>
</div>
