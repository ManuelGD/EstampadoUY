<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Agregar Usuario</title>
</head>

<body class="bodymenus">
    <?php
    include("../menu_admin.html");
    ?>
    <form class="form_agregar_usuario" action="cargar_usuario.php" method="post">
        <h1>Agregar Usuario</h1>
        <input type="email" name="email_usuario" placeholder="Email" required>
        <input type="password" name="password_usuario" placeholder="Contraseña" required>
        <select name="rol_usuario" required>
            <option value="">Elegir Rol</option>
            <option value="admin">admin</option>
            <option value="vendedor">vendedor</option>
        </select>
        <input class="sbmt_form_au" type="submit" value="Agregar Usuario">
    </form>
    <?php
    include("../footer.html");
    ?>
</body>

</html>