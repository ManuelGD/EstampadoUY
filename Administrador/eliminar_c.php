<?php 
    require("../Conexion/conexion.php");

    $ver = $_GET['version_configuracion'];

    $res = $conexion->prepare("DELETE FROM configuracion WHERE version_configuracion=?");
    $res->execute([$ver]);
    echo "<link rel=stylesheet href=../Style/estilos.css>";
    echo "<h1>Configuracion Eliminada</h1>";
    echo "<button><a href=pag_admin.php>Volver Atras</button>"
?>