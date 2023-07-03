<?php 
    require("../Conexion/conexion.php");

    $id = $_GET['id'];

    $res = $conexion->prepare("DELETE FROM usuarios WHERE id_usuario=?");
    $res->execute([$id]);
    echo "<link rel=stylesheet href=../style/estilos.css>";
    echo "<h1>Usuario Eliminado</h1>";
    echo "<button><a href=pag_admin.php>Volver Atras</button>"
?>