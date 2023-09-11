<?php 
    require("../Conexion/conexion.php");

    $idProducto = $_GET['idProducto'];

    $res = $conexion->prepare("SELECT * FROM promocion WHERE idProducto=?");
    $res->execute([$idProducto]);
    $reg = $res->fetch();
    
    if($reg['idProducto'] == $idProducto){
        $res = $conexion->prepare("DELETE FROM promocion WHERE idProducto=?");
        $res->execute([$idProducto]);
    }

    $res1 = $conexion->prepare("DELETE FROM producto WHERE idProducto=?");
    $res1->execute([$idProducto]);
    header("Location:mostrar_productos.php");
?>