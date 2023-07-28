<?php
    require("../Conexion/conexion.php");

    $imagen_producto = $_POST['imagen_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    

    $res = $conexion->prepare("INSERT INTO producto (nombre_producto, imagen_producto, precio_producto) VALUES (?,?,?)");
    $res->execute([$nombre_producto,$imagen_producto,$precio_producto]);
    header("Location:pag_vendedor.php");
?>
