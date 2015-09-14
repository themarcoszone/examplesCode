<?php
include 'Rectangle.php';
include 'Circle.php';

function printAreas($x){
	echo "This is the value of area: ".$x->getArea()."<br/>";
}

$rectangle = new Rectangle(10,20);
$circle = new Circle(5);
printAreas($rectangle);
printAreas($circle);


?>
