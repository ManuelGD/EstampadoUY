<?php
session_start(); 
    if(isset($_SESSION['idRol'])){       
        if ($_SESSION['idRol'] == '1') {
            header("Location:Administrador/pag_admin.php");
        } else if($_SESSION['idRol'] == '2'){
            header("Location:Vendedor/pag_vendedor.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="iconos/css/all.min.css">
    <link rel="stylesheet" href="style/estilos.css">    
    <title>Inicia Sesion</title>
</head>
<body class="bodylogin">
    <form class="form_login" action="verificar.php" method="post">
    <div class="container">
        <h1>Inicia Sesión</h1>
        <label for="email"><i class="fa-solid fa-envelope" width="15px"></i>
        <input class="input_login" type="email" name="email_usuario" placeholder="Email" required>
        </label>
        <label for="contra"><i class="fa-solid fa-lock" width="15px"></i>
        <input class="input_login" type="password" name="password_usuario" placeholder="Contraseña" required>
        </label>
        <input type="submit" value="Iniciar Sesion" class="submit">
    </div>
    </form>
</body>
</html>