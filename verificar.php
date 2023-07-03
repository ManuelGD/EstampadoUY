<?php
session_start();
require("Conexion/conexion.php");

$email = $_POST['email'];
$contra = $_POST['contra'];

$sql = "SELECT * FROM usuarios WHERE email_usuario = '$email'";
$result = $conexion->query($sql);
$reg = $result->fetch();

$var = $reg[3];

if(password_verify($contra, $reg[3])){
    $_SESSION['email']=$reg[1];
    $_SESSION['rol']=$reg[4];
    if($_SESSION['rol']=="vendedor"){
        header("Location:Vendedor/pag_vendedor.php");
    }else{
        header("Location:Administrador/pag_admin.php");
    }
}else{
    header("Location:logueo.php");
}
