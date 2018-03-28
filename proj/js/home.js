$("#left, #right").each(function() {
$(this).data("standardWidth", $(this).width());
});

$('#left_shifter').click(function (){
$('#left').animate({width:'14%'}, 500);
$('#right').animate({width:'85.5%'}, 500);
});

$('#right_shifter').click(function () {
$('#right').animate({width:'14.5%'},500);
$('#left').animate({width:'85%'}, 500);
});

$('#center').click(function (){
$('#left').animate({width:'49%'}, 500);
$('#right').animate({width:'50.5%'}, 500);
})
