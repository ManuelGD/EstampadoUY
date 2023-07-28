<?php 
    require("../Conexion/conexion.php");

    $email_usuario = $_GET['email_usuario'];

    $res = $conexion->prepare("DELETE FROM usuario WHERE email_usuario=?");
    $res->execute([$email_usuario]);

    $res1 = $conexion->prepare("DELETE FROM usuariorol WHERE email_usuario=?");
    $res1->execute([$email_usuario]);

    header("Location:mostrar_usuarios.php");
?>
