<?php
class Circle{
	private $radius;
	private $x;
	private $y;
	const PI = 3.14159;

	public function __construct($radius,$x=0, $y=0){
		$this->radius = $radius;
		$this->x = $x;
		$this->y = $y;
	}

	public function getArea(){
		return self::PI * pow($this->radius,2);
	}
}
?>
