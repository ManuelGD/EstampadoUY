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
    echo "<h1>Usuarios</h1>";
    echo "<div class=tabla>";
    echo "<table>";
    echo "<thead><th>Email</th><th>Rol</th><th></th><th></th></thead>";
    while ($reg = $res->fetch()) {
        if ($reg['idRol'] == '1') {
            $rol = 'Administrador';
        } else if ($reg['idRol'] == '2') {
            $rol = 'Vendedor';
        }
        echo "<tr>
        <td>$reg[email_usuario]</td>
        <td>$rol</td>
        <td><a href=form_modificar_u.php?email_usuario=$reg[email_usuario]&rol_usuario=$rol><i class='fa-solid fa-pen-to-square'></i></a></td>
        <td><a href=eliminar_u.php?email_usuario=$reg[email_usuario]><i class='fa-solid fa-trash-can'></i></a></td>
        </tr>";
    }
    echo "</table>";
    echo "</div>";
    include("../footer.html");
    ?>
</body>

</html>