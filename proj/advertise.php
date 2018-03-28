<meta http-equiv="refresh" content="5">

<?php 

$x=range(2,8);
$y=array_rand($x);
$z=$x[$y];
$ar=scandir("imagesAdv/");

 echo'<img src="imagesAdv/'.$ar[$z].'" height="400" width=200; />'; 
 ?>

 