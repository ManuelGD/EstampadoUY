<?php
require("../Conexion/conexion.php");

$res = $conexion->query("SELECT idProducto FROM producto ORDER BY idProducto DESC LIMIT 1");
$reg = $res->fetch();

$id = $reg[0] + 1;
$fileName = $id.'.jpg';
$temporal = $_FILES['imagen_producto']['tmp_name'];
$uploadFileDir = '../imagenes/';
$dest_path = $uploadFileDir.$fileName;

if(!move_uploaded_file($temporal,$dest_path)){
    echo "ERROR";
}


$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];


$res1 = $conexion->prepare("INSERT INTO producto (nombre_producto, imagen_producto, precio_producto) VALUES (?,?,?)");
$res1->execute([$nombre_producto, $fileName, $precio_producto]);
header("Location:mostrar_productos.php");
?>