<?php
require("../Conexion/conexion.php");

$email_usuario = $_POST['email_usuario'];
$password_usuario = password_hash($_POST['password_usuario'], PASSWORD_DEFAULT);
$rol_usuario = $_POST['rol_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$apellido_usuario = $_POST['apellido_usuario'];
//usar indice del select
if ($rol_usuario == "admin") {
    $idRol = 1;
} else if ($rol_usuario == "vendedor") {
    $idRol = 2;
}

$res1 = $conexion->prepare("INSERT INTO usuario (email_usuario, nombre_usuario, apellido_usuario, password_usuario) VALUES (?,?,?,?)");
$res1->execute([$email_usuario, $nombre_usuario, $apellido_usuario, $password_usuario]);
$res2 = $conexion->prepare("INSERT INTO usuariorol (email_usuario, idRol) VALUES (?,?)");
$res2->execute([$email_usuario, $idRol]);

header("Location:mostrar_usuarios.php");
?>