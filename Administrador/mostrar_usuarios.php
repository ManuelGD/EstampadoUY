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



    while ($reg = $res->fetch()) {

        if ($reg['idRol'] == '1') {
            $rol = 'Administrador';
        } else if ($reg['idRol'] == '2') {
            $rol = 'Vendedor';
        }


        
        
        echo "<div class=usuarios>";
        echo "<h2 .ancho>Email</h2><p class=texto_u .ancho>$reg[email_usuario]</p><h2 .ancho>Rol</h2><p class=texto_u .ancho>$rol</p>";
        echo "<button class=btn_operaciones .ancho><a href=form_modificar_u.php?email_usuario=$reg[email_usuario]>Modificar</a></button>";
        echo "<button class=btn_operaciones ><a href=eliminar_u.php?email_usuario=$reg[email_usuario]>Eliminar</a></button>";

        echo "</div>";
    }


    include("../footer.html");
    ?>
</body>

</html>