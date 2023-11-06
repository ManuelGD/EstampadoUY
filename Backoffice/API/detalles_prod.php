<?php
require("../Conexion/conexion.php");

$id = $_GET["id"];

$sql="SELECT * FROM producto WHERE idProducto = ".$id;

$res = $conexion->query($sql);
$reg = $res->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");
echo json_encode($reg, JSON_PRETTY_PRINT);

?>