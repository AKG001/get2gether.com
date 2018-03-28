function validate_post()
{
var p=document.getElementById('share');
var a=document.getElementById('uploads');

if((p.value=="" || p.value==undefined) && (!a.value) )
return false;

else return true;
}
