<?php
session_start();
require("Conexion/conexion.php");

$email_usuario = $_POST['email_usuario'];
$password_usuario = $_POST['password_usuario'];

$sql1 = "SELECT password_usuario FROM usuario WHERE email_usuario = '$email_usuario'";
$result1 = $conexion->query($sql1);
$reg1 = $result1->fetch();

if($reg1){
    if (password_verify($password_usuario, $reg1[0])) {
        
        $sql = "SELECT * FROM usuariorol WHERE email_usuario = '$email_usuario'";
        $result = $conexion->query($sql);
        $reg = $result->fetch();
        
        $_SESSION['idRol'] = $reg[1];
        
        if ($reg[1] == '1') {
            header("Location:Administrador/pag_admin.php");
        } else {
            header("Location:Vendedor/pag_vendedor.php");
        }

    } else {
        header("Location:index.php");
    }
}
