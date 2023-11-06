<?php
//json de los productos que estan actualmente en el carrito

require("../Conexion/conexion.php");

$prods = "";

$prods = $_GET['prods'];
if($prods != ""){
    $res = $conexion->query("SELECT * FROM producto WHERE idProducto  IN (".$prods.")");
    $reg = $res->fetchAll(PDO::FETCH_ASSOC);

    header("Content-Type: application/json");
    echo json_encode($reg, JSON_PRETTY_PRINT);
}else{
    header("Content-Type: application/json");
    echo json_encode([], JSON_PRETTY_PRINT);
}


?>