<?php
    require("../Conexion/conexion.php");
    $idProducto = $_POST['idProducto'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $precio_promo = $_POST['precio_promo'];
    
    $res = $conexion->prepare("INSERT INTO promocion(idProducto, fecha_inicio, fecha_fin, precio_promocion) VALUES (?,?,?,?)");
    $res->execute([$idProducto,$fecha_inicio,$fecha_fin,$precio_promo]);
    
    header("Location:mostrar_productos.php");
?>