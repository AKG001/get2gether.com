// JavaScript Document
var selectid;

$(document).on('click','.select',function(){
  selectid = $(this).index('.select');
  var adjust = ($(this).hasClass('collapsed')) ? 1 : 0;
  
  console.log((($(this).children('.option').length) * $(this).children('.option').height()) * (adjust) + 40 + 'px');
  
  $(this).animate({'height':(($(this).children('.option').length) * $(this).children('.option').height()) * (adjust) + 40 + 'px'},100);
  
});
$(document).on('click','.shown',function(){ $('.select').toggleClass('collapsed');});

$(document).on('click','.shown',function(){
  var val = $(this).text();
  console.log(val);
  //$(this).parent().find('.shown').text(val);
  //selectid = -1;
});

setInterval(function(){
if($('#fn').val()=="" && $('#ln').val()=="")
document.getElementById('cngn').setAttribute('disabled','disabled');
else document.getElementById('cngn').removeAttribute('disabled');
},1000);

setInterval(function(){
if($('#eem').val()=="" )
document.getElementById('sem').setAttribute('disabled','disabled');
else document.getElementById('sem').removeAttribute('disabled');
},1000);
