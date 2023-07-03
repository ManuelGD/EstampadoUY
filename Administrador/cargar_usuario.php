<?php
    require("../Conexion/conexion.php");

    $email_usuario = $_POST['email_usuario'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $clave_usuario = password_hash($_POST['clave_usuario'], PASSWORD_DEFAULT);
    $rol_usuario = $_POST['rol_usuario'];

    $res = $conexion->prepare("INSERT INTO usuarios (email_usuario, nombre_usuario, clave_usuario, rol_usuario) VALUES (?,?,?,?)");
    $res->execute([$email_usuario,$nombre_usuario,$clave_usuario,$rol_usuario]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Usuario Cargado</title>
</head>
<body>
    <h2>Usuario cargado correctamente</h2>
    <button><a href="pag_admin.php">Volver Atras</button>
</body>
</html>