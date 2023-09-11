<?php
    require("../Conexion/conexion.php");

    $idConfiguracion = '1';
    $logo_empresa = $_POST['logo_empresa'];
    $rubro_empresa = $_POST['rubro_empresa'];
    $nombre_empresa = $_POST['nombre_empresa'];
    $barrio = $_POST['barrio'];
    $calle = $_POST['calle'];
    $manzana = $_POST['manzana'];
    $solar = $_POST['solar'];
    $comentario_venta = $_POST['comentario_venta'];
    $contacto_empresa = $_POST['contacto_empresa'];

    $res = $conexion->prepare("UPDATE configuracion SET logo_empresa=?, rubro_empresa=?, nombre_empresa=?, barrio=?, calle=?, manzana=?, solar=?, comentario_venta=?, contacto_empresa=? WHERE idConfiguracion=?");
    $res->execute([$logo_empresa,$rubro_empresa,$nombre_empresa,$barrio,$calle,$manzana,$solar,$comentario_venta,$contacto_empresa,$idConfiguracion]);
    header("Location:pag_admin.php");
?>