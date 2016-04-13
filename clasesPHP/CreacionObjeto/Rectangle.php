<?php
class Rectangle{
	private $x;
	private $y;
	private $height;
	private $width;

	public function __construct($width=10, $height=10, $x=0, $y=0){
		$this->width = $width;
		$this->height = $height;
		$this->x = $x;
		$this->y = $y;
	}

	public function getArea(){
		return $this->height*$this->width;
	}

	public function printInfo(){
		printf("Area ".($this->height * $this->width)." xPos = ".$this->x." yPos = ".$this->y."<br/>");
	}

}

?>
