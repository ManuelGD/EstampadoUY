<?php
require("../Conexion/conexion.php");

$res = $conexion->query("SELECT * FROM producto WHERE idProducto NOT IN ( SELECT idProducto FROM promocion WHERE fecha_inicio <= CURRENT_DATE AND fecha_fin >= CURRENT_DATE )");
$reg = $res->fetchAll(PDO::FETCH_ASSOC);

$count = array(count($reg));

echo json_encode($count, JSON_PRETTY_PRINT);
header("Content-Type: application/json");
?>

