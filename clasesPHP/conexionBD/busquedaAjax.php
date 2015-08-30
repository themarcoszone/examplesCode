<?php
include('connectDB2.php');

$id = $_GET['q'];

$stmt = $connectionDB->prepare("SELECT * FROM cliente c WHERE c.idcliente = ?");

$stmt->bind_param('i',$id);
$stmt->execute();

$result = $stmt->get_result();
echo json_encode($result->fetch_assoc());
?>
