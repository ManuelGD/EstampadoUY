<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Mostrar Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <?php
        require("../Conexion/conexion.php");

        $res = $conexion->query("SELECT * FROM productos");
        echo "<br>";
        while($reg = $res->fetch()){
            echo "<img src=../imagenes/$reg[imagen_producto] width=90px>$reg[id_producto] - $reg[nombre_producto] - USD $reg[precio_producto]";
            echo "<br>";
            echo "<button><a href=form_modificar_p.php?id=$reg[id_producto]>Modificar</a></button>";
            echo "<button><a href=eliminar_p.php?id=$reg[id_producto]>Eliminar</a></button>";
            echo "<br>";
        }
    ?>
    <button><a href="pag_vendedor.php">Volver Atras</button>
</body>
</html>