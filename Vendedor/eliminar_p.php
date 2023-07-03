<?php 
    require("../Conexion/conexion.php");

    $id = $_GET['id'];

    $res = $conexion->prepare("DELETE FROM productos WHERE id_producto=?");
    $res->execute([$id]);
    echo "<link rel=stylesheet href=../Style/estilos.css>";
    echo "<h1>Producto Eliminado</h1>";
    echo "<button><a href=pag_vendedor.php>Volver Atras</button>"
?>