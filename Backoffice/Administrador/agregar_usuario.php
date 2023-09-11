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
        
        <input type="text" name="nombre_usuario" placeholder="Nombre" required>
        
        <input type="text" name="apellido_usuario" placeholder="Apellido" required>
        
        <input type="email" name="email_usuario" placeholder="Email" required>

        <p class="info_password">Contraseña con Mayúsculas y Minúsculas, un número y un Carácter Especial. Longitud: 10 a 15 caracteres.</p>
        <input type="password" name="password_usuario" placeholder="Contraseña" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{10,15}$" required>
                
        <select name="rol_usuario" required>
            <option value="">Seleccionar Rol</option>
            <option value="admin">Administrador</option>
            <option value="vendedor">Vendedor</option>
        </select>
    
        <input class="sbmt_form_au" type="submit" value="Agregar Usuario">
    </form>
    <?php
    include("../footer.html");
    ?>
</body>

</html>