<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Mostrar Usuarios</title>
</head>

<body class="bodymenus">
    <?php
    include("../menu_admin.html");
    require("../Conexion/conexion.php");

    $res = $conexion->query("SELECT * FROM usuariorol");
    $res1 = $conexion->query("SELECT nombre_usuario, apellido_usuario FROM usuario");
    $reg1 = $res1->fetch();
    echo "<h1>Usuarios</h1>";
    echo "<div class=tabla>";
    echo "<table border='1'>";
    echo "<thead><th>Email</th><th>Rol</th><th>Nombre</th><th>Apellido</th><th>Operaciones</th></thead>";
    while ($reg = $res->fetch()) {
        if ($reg['idRol'] == '1') {
            $rol = 'Administrador';
        } else if ($reg['idRol'] == '2') {
            $rol = 'Vendedor';
        }
        echo "<tr>
        <td>$reg[email_usuario]</td>
        <td>$rol</td>
        <td>$reg1[nombre_usuario]</td>
        <td>$reg1[apellido_usuario]</td>
        <td><a href=form_modificar_u.php?email_usuario=$reg[email_usuario]&rol_usuario=$rol>Modificar</a><a href=eliminar_u.php?email_usuario=$reg[email_usuario]>Eliminar</a></td>
        </tr>";
    }
    echo "</table>";
    echo "</div>";
    include("../footer.html");
    ?>
</body>

</html>