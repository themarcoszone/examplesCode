<?php
if(isset($_COOKIE['color1'])){
	echo '<p style="color:'.$_COOKIE['color1'].'">Este es el color1</p>'."\n";
}
if(isset($_COOKIE['color2'])){
	echo '<p style="color:'.$_COOKIE['color2'].'">Este es el color2</p>'."\n";
}
if(isset($_COOKIE['color3'])){
	echo '<p style="color:'.$_COOKIE['color3'].'">Este es el color3</p>'."\n";
}
?>
