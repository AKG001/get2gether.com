<?php
$id=$_GET['id'];
$pic=basename($_GET['src']);

mysql_connect("localhost","root","");
mysql_select_db("get2gether");

$q=mysql_query("select * from attachments where post_id='$id'");
$num=mysql_num_rows($q);
$count=1;
//if($move==0)
//{
while($f=mysql_fetch_array($q))
	{

	if($pic==$f['attached']) break;
	$count++;
	}
	if($count==$num)	$q=mysql_query("select * from attachments where post_id='$id'");
	$f=mysql_fetch_array($q);
	$pic=$f['attached'];
/*
}

else if($move==1)
{
	while($f=mysql_fetch_array($q))
	{

		if($pic==$f['attached']) break;
	$count++;
	}
	if($count==$num)	$q=mysql_query("select * from attachments where post_id=1437213187");
	$f=mysql_fetch_array($q);
	$pic=$f['attached'];
}
else if($move==-1)
{
	while($f=mysql_fetch_array($q))
	{
		if($pic==$f['attached']) break;
	$prev=$f['attached'];		
	$count++;
	}
	if($count==1)	
	{
	$num--;
	while($num--) $f=mysql_fetch_array($q);
	$prev=$f['attached']; 
	}
	$pic=$prev;
}*/
echo "post_uploads/".$pic;

?>