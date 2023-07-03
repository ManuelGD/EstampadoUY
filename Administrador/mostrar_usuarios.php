<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Mostrar Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <?php
        require("../Conexion/conexion.php");

        $res = $conexion->query("SELECT * FROM usuarios");
        echo "<br>";
        while($reg = $res->fetch()){
            echo "$reg[id_usuario] - $reg[email_usuario] - $reg[nombre_usuario] - $reg[clave_usuario] - $reg[rol_usuario]";
            echo "<br>";
            echo "<button><a href=form_modificar_u.php?id=$reg[id_usuario]>Modificar</a></button>";
            echo "<button><a href=eliminar_u.php?id=$reg[id_usuario]>Eliminar</a></button>";
            echo "<br>";
        }
    ?>
    <button><a href="pag_admin.php">Volver Atras</button>
</body>
</html>