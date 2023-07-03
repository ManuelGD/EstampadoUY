<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style/estilos.css">    
    <title>Inicio de Sesion</title>
</head>
<body>
    <form class="form_login" action="verificar.php" method="post">
    <div class="container">
        <h1>Inicio de Sesión</h1>
        <label for="email"><img src="imagenes\correo-electronico-vacio.png" width="15px">
        <input type="email" id="email" name="email" placeholder="Email" required>
        </label>
        <label for="contra"><img src="imagenes/candado.png" width="15px">
        <input type="password" id="contra" name="contra" placeholder="Contraseña" required>
        </label>
        <input type="submit" value="Iniciar Sesion" class="submit">
    </div>
    </form>
</body>
</html>