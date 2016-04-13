<?php
	include 'Rectangle.php';

 	$square1 = new Rectangle(100,100);
 	$square2 = new Rectangle(100,100,20,40);

 	$rectangle1 = new Rectangle(50,60, 10,20);
 	$rectangle2 = new Rectangle(null,null,20,10);
 	$rectangle3 = new Rectangle();

 	printf("Area for square1 ".$square1->getArea()."<br/>");
 	printf("Area for square2 ".$square2->getArea()."<br/>");

 	printf("Info about rectangle1: ");
 	$rectangle1->printInfo();

 	printf("Info about rectangle2: ");
 	$rectangle2->printInfo();

 	printf("Info about rectangle3: ");
 	$rectangle3->printInfo();
?>
