function comment(e,id,user,id_help)
{
	var code=(e.keyCode?e.keyCode:e.which);
	console.log(code);
	if(code==13)
	{
	var nw='comment'+id_help;

var com=document.getElementById(nw).value;

if(com=="")	return ;
else
{
var xmlhttp=new XMLHttpRequest;
xmlhttp.onreadystatechange=function()
{
	if(xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		document.getElementById(nw).value="";
	}
}
xmlhttp.open("GET","put_comment.php?comment="+com+"&id="+id+"&by="+user,true);
xmlhttp.send();
}
}
}
