<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Mostrar Configuracion</title>
</head>
<body>
    <h1>Configuracion</h1>
    <?php
        require("../Conexion/conexion.php");

        $res = $conexion->query("SELECT * FROM configuracion");
        echo "<br>";
        while($reg = $res->fetch()){
            echo "$reg[version_configuracion] - Logo: $reg[logo_empresa] - Rubro: $reg[rubro_empresa] - Nombre: $reg[nombre_empresa] - Barrio: $reg[barrio_empresa] - Calle: $reg[calle_empresa] - Manzana: $reg[manzana_empresa] - Solar: $reg[solar_empresa] - Comentario Venta: $reg[comentario_empresa] - Contacto: $reg[contacto_empresa]";
            echo "<br>";
            echo "<button><a href=form_modificar_c.php?version_configuracion=$reg[version_configuracion]>Modificar</a></button>";
            echo "<button><a href=eliminar_c.php?version_configuracion=$reg[version_configuracion]>Eliminar</a></button>";
            echo "<br>";
        }
    ?>
    <button><a href="pag_admin.php">Volver Atras</button>
</body>
</html>