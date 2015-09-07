<?php
session_start();
if(isset($_SESSION["user"])){
	echo "<p>Bienvenido ".$_SESSION["user"]."</p>";
	echo '<a href="BusquedaAjaxCliente.html">Buscar Cliente</a>';
}else{
	session_destroy();
	header("Location: /sisFacturacion/errorPermiso.html");
}

?>
