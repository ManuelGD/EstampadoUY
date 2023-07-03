<?php
    require("../Conexion/conexion.php");

    $logo_empresa = $_POST['logo_empresa'];
    $rubro_empresa = $_POST['rubro_empresa'];
    $nombre_empresa = $_POST['nombre_empresa'];
    $barrio_empresa = $_POST['barrio_empresa'];
    $calle_empresa = $_POST['calle_empresa'];
    $manzana_empresa = $_POST['manzana_empresa'];
    $solar_empresa = $_POST['solar_empresa'];
    $comentario_empresa = $_POST['comentario_empresa'];
    $contacto_empresa = $_POST['contacto_empresa'];

    $res = $conexion->prepare("INSERT INTO configuracion (logo_empresa, rubro_empresa, nombre_empresa, barrio_empresa, calle_empresa, manzana_empresa, solar_empresa, comentario_empresa, contacto_empresa) VALUES (?,?,?,?,?,?,?,?,?)");
    $res->execute([$logo_empresa,$rubro_empresa,$nombre_empresa,$barrio_empresa,$calle_empresa,$manzana_empresa,$solar_empresa,$comentario_empresa,$contacto_empresa]);
    header("Location:pag_admin.php");
?>