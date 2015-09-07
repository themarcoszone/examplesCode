<?php
include("connectDB2.php");

$user=$_POST["user"];
$pass=$_POST["pass"];

$stmt = $connectionDB->prepare("SELECT * FROM user u WHERE u.userName = ?");

$stmt->bind_param('s',$user);
$stmt->execute();

$result = $stmt->get_result();

$userResult=$result->fetch_assoc();

if ($userResult["pass"] === $pass) {
	$response="ok";
	session_start();
	$_SESSION["user"]=$user;
}else{
	$response="error";
}
echo $response;
?>
