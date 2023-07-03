<?php
    require("../Conexion/conexion.php");
    $id_usuario = $_POST['id_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $clave_usuario = $_POST['clave_usuario'];
    $rol_usuario = $_POST['rol_usuario'];

    $res = $conexion->prepare("UPDATE usuarios SET email_usuario=?, nombre_usuario=?, clave_usuario=?, rol_usuario=?  WHERE id_usuario=?");
    $res->execute([$email_usuario,$nombre_usuario,$clave_usuario,$rol_usuario,$id_usuario]);

    echo "<link rel=stylesheet href=../Style/estilos.css>";
    echo "<h1>Usuario Modificado</h1>";
    echo "<br>";

    $usuario_modificado = $conexion->query("SELECT * FROM productos WHERE id_producto=$id_usuario");
    
    while($reg_usuario_modificado = $usuario_modificado->fetch()){
        echo "$reg_usuario_modificado[id_usuario] - $reg_usuario_modificado[email_usuario] - $reg_usuario_modificado[nombre_usuario] - $reg_usuario_modificado[clave_usuario] - $reg_usuario_modificado[rol_usuario]";
    }
    
    echo "<button><a href=pag_admin.php>Volver Atras</button>";
?>