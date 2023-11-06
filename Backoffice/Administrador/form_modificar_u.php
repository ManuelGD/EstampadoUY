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
    $rol = $_GET['rol_usuario'];
    ?>
    <form class="form_agregar_usuario" action="modificar_u.php" method="post">
    <h1>Modificar Usuario</h1>
        <input type="text" name="email" value="<?php echo $email_usuario ?>"disabled>
        <input type="password" name="password_usuario" placeholder="Nueva contraseña..." pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{10,15}$" required>

        <select name="rol_usuario" required>
            <option value="">Elegir Rol</option>
            <option value="Administrador"<?php if($rol == "Administrador"){ echo "selected";} ?>>Administrador</option>
            <option value="Vendedor" <?php if($rol == "Vendedor"){ echo "selected";} ?>>Vendedor</option>
        </select>
        <input class="sbmt_form_au" type="submit" value="Modificar">
    </form>
    <?php
    include("../footer.html");
    ?>
</body>

</html>