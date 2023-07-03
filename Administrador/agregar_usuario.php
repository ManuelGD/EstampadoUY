<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="cargar_usuario.php" method="post">
    <input type="email" id="email_usuario" name="email_usuario" placeholder="Email" required>
    <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre de Usuario" required>
    <input type="password" id="clave_usuario" name="clave_usuario" placeholder="Contraseña" required>
    <select name="rol_usuario" required>
        <option value="">Elegir Rol</option>
        <option value="admin">admin</option>
        <option value="vendedor">vendedor</option>
    </select>
    <input type="submit" value="Agregar Usuario">
    </form>
    <button><a href="pag_admin.php">Volver Atras</button>
</body>
</html>