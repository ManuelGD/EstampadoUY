<?php
session_start();
if($_SESSION['rol']!="admin"){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Pagina Admin</title>
</head>
<body>
    <h1>Pagina Admin</h1>
    <button><a href="agregar_usuario.php">Agregar Usuario</a></button> 
    <button><a href="mostrar_usuarios.php">Mostrar Usuarios</a></button>
    <button><a href="agregar_configuracion.php">Agregar Configuracion</a></button>
    <button><a href="mostrar_configuracion.php">Mostrar Configuracion</a></button>
    <button><a href="../deslog.php">Desloguearse</a></button>
</body>
</html>