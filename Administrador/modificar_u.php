<?php
    require("../Conexion/conexion.php");

    $email_actual = $_POST['email_actual'];
    $email_usuario = $_POST['email_usuario'];
    $password_usuario = password_hash($_POST['password_usuario'], PASSWORD_DEFAULT);
    $rol_usuario = $_POST['rol_usuario'];
    
    if($rol_usuario == "admin"){
        $idRol = 1;
    }else if($rol_usuario == "vendedor"){
        $idRol = 2;
    }

    $res = $conexion->prepare("UPDATE usuario SET email_usuario=?, password_usuario=? WHERE email_actual=?");
    $res->execute([$password_usuario,$email_usuario,$email_actual]);

    $res1 = $conexion->prepare("UPDATE usuariorol SET email_usuario=?, idRol=? WHERE email_actual=?");
    $res1->execute([$email_usuario,$idRol,$email_actual]);

    header("Location:mostrar_usuarios.php");
?>
