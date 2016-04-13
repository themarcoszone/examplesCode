<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<?php
include('connectDB.php');

$result=mysql_query("SELECT * from cliente");
echo '<table >';
while($row = mysql_fetch_assoc($result)){
	
	echo "<tr>";
	foreach ($row as $key => $value) {
		echo "<td><b>".$key.":</b> ".$value."</td>";
	}
	echo "</tr>";

	// echo "<tr>";
	// echo "<td><b>Nombre:</b> ".$row['nombre']."</td>";
	// echo "<td><b>Telefono:</b> ".$row['telefono']."</td>";
	// echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
