<?php
    require("../Conexion/conexion.php");

    $idProducto = $_GET['idProducto'];

    $res = $conexion->prepare("DELETE FROM promocion WHERE idProducto=?");
    $res->execute([$idProducto]);

    $res = $conexion->prepare("DELETE FROM producto WHERE idProducto=?");
    $res->execute([$idProducto]);

    header("Location:mostrar_productos.php");
?>