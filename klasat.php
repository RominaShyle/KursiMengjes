<?php 


require_once 'klasat/Rectangle.php';

$drejtk = new Rectangle();
$drejtk1 = new Rectangle(4,5);

// /$drejtk->a =4;
//$drejtk->b =5; // NUK E BEJ DOT, SEPSE B ESHTE PRIVATE


echo "<pre>";
var_dump($drejtk);
echo "</pre>";

$drejtk->set(6,5);


echo "<pre>";
var_dump($drejtk1);
echo "</pre>";

echo "brinja a eshte: ". $drejtk->a;
echo "brinja b eshte: ". $drejtk->getB();


echo "<br> Perimetri i drejtkendshit me brinje $drejtk->a dhe ". $drejtk->getB() ." eshte " .$drejtk->perimeter();  
echo "<br> Siperfaqja e drejtkendshit me brinje $drejtk->a dhe ". $drejtk->getB() ." eshte " .$drejtk->area();  





?>