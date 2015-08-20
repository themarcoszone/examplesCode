<?php
$con= mysql_connect('localhost','root','') or die ("No se pudo conectar al gestor ". mysql_error());
echo "Conexion exitosa";
mysql_select_db('sisFact', $con) or die ("No se pudo conectar a la base de datos");

?>
