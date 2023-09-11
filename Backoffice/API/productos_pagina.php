<?php
require("../Conexion/conexion.php");

$ppp = 8;

if(isset($_GET['p'])){
    $pag = $_GET['p'];
}else{
    $pag = 1;
}

$inicio = ($pag * $ppp) - $ppp;

$res = $conexion->query("SELECT * FROM producto WHERE idProducto NOT IN ( SELECT idProducto FROM promocion WHERE fecha_inicio <= CURRENT_DATE AND fecha_fin >= CURRENT_DATE ) LIMIT $inicio,$ppp");
$reg = $res->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");
echo json_encode($reg, JSON_PRETTY_PRINT);
?>