<?php
$connectionDB= new  mysqli('localhost', 'root', '', 'sisfact');

if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

?>
