<?php 


require_once 'Square.php';

echo 'Square results' . PHP_EOL;
$squarey = new Square(10);

echo $squarey->perimeter() . PHP_EOL;
echo $squarey->area() . PHP_EOL;

echo 'Rect results' . PHP_EOL;
$rect = new Rectangle(10, 20);

echo $rect->perimeter() . PHP_EOL;
echo $rect->area() . PHP_EOL;