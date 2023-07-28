<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Mostrar Productos</title>
</head>

<body class="bodymenus">
    <?php
    require("../Conexion/conexion.php");
    include("../menu_vendedor.html");
    ?>
    <h1>Productos Cargados</h1>
    <?php
    $res = $conexion->query("SELECT * FROM producto");
    while ($reg = $res->fetch()) {
        $idProducto = $reg['idProducto']; 
        echo "<div class=container_productos>";
        echo "<div class=productos><img src=../imagenes/$reg[imagen_producto] width=100px></div>";
        echo "<div class=productos><h2>ID: $reg[idProducto]</h2></div>";
        echo "<div class=productos><h2>Nombre: $reg[nombre_producto]</h2></div>";
        echo "<div class=productos><h2>Precio: USD$reg[precio_producto]</h2></div>";
        //echo "<button><a href=form_modificar_p.php?idProducto=$idProducto>Modificar</a></button>";
        echo "<button><a href=eliminar_p.php?idProducto=$reg[idProducto]>Eliminar</a></button>";
        echo "</div>";
    }


    include("../footer.html");
    ?>
</body>

</html>