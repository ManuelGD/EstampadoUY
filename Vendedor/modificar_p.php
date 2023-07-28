<?php
    require("../Conexion/conexion.php");
    $idProducto = $_POST['idProducto'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    $imagen_producto = $_POST['imagen_producto'];
       
    
    $res = $conexion->prepare("UPDATE producto SET nombre_producto=?, imagen_producto=?, precio_producto=? WHERE idProducto=?");
    $res->execute([$nombre_producto,$imagen_producto, $precio_producto,$id_producto]);

    header("Location:pag_vendedor.php");
?>