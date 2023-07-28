<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Modificar Usuario</title>
</head>

<body class="bodymenus">
    <?php
    require("../Conexion/conexion.php");
    include("../menu_admin.html");
    $email_usuario = $_GET['email_usuario'];
    ?>
    <form class="form_agregar_usuario" action="modificar_u.php" method="post">
    <h1>Modificar Usuario</h1>
        <input type="hidden" name="email_actual" value="<?php $email_usuario ?>">
        <input type="email" name="email_usuario" placeholder="Email" required>
        <input type="password" name="password_usuario" placeholder="Nueva contraseña..." required>

        <select name="rol_usuario" required>
            <option value="">Elegir Rol</option>
            <option value="admin">admin</option>
            <option value="vendedor">vendedor</option>
        </select>
        <input class="sbmt_form_au" type="submit" value="Modificar">
    </form>
    <?php
    include("../footer.html");
    ?>
</body>

</html>