<?php
    require("../Conexion/conexion.php");

    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    if(!empty($_POST['imagen_producto'])){
        $imagen_producto = $_POST['imagen_producto'];
    }else{
        $default = "default.png";
        $imagen_producto = $default;
    }

    $res = $conexion->prepare("INSERT INTO productos (nombre_producto, precio_producto, imagen_producto) VALUES (?,?,?)");
    $res->execute([$nombre_producto,$precio_producto,$imagen_producto]);
    header("Location:pag_vendedor.php");
?>
