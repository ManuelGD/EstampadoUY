<?php
require("../Conexion/conexion.php");

$res = $conexion->query("SELECT * FROM producto JOIN promocion ON producto.idProducto = promocion.idProducto WHERE fecha_inicio <= CURRENT_DATE AND fecha_fin >= CURRENT_DATE");
$reg = $res->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($reg, JSON_PRETTY_PRINT);
header("Content-Type: application/json");
?>