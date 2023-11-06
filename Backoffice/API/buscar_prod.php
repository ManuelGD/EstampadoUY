<?php
require("../Conexion/conexion.php");

$producto = $_GET['prod'];

//$res = $conexion->query("SELECT * FROM producto JOIN promocion ON producto.idProducto = promocion.idProducto WHERE fecha_inicio <= CURRENT_DATE AND fecha_fin >= CURRENT_DATE AND nombre_producto LIKE %$producto%Ç");
$res = $conexion->query("SELECT * FROM producto where nombre_producto LIKE '%producto%'");
$reg = $res->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");
echo json_encode($reg, JSON_PRETTY_PRINT);

?>