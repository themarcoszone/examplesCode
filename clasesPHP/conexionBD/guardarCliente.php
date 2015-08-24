<?php
include('connectDB.php');

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];

$query = "INSERT INTO cliente (nombre,telefono,mail) VALUES('" . $nombre ."','" . $telefono . "','" .$mail ."')";

if (mysql_query($query)) {
    echo "El cliente fue agregado exitosamente";
    header("Refresh: 3; url=cargaCliente.html");
} else {
    echo "Error con la query: " . $query . "<br>" . mysql_error();
    header("Location: /sisFacturacion/error.html");
}
?>
