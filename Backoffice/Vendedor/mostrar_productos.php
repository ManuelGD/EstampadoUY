<?php
require("../Conexion/conexion.php");
session_start();
?>
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
    include("../menu_vendedor.html");
    ?>
    <h1>Productos Promocionados</h1>
    <?php
    $res = $conexion->query("SELECT * FROM producto JOIN promocion ON producto.idProducto = promocion.idProducto WHERE fecha_inicio <= CURRENT_DATE AND fecha_fin >= CURRENT_DATE");
    echo "<div class=tabla>";
    echo "<table>";
    echo "<thead><th>ID</th><th>Nombre</th><th>Precio</th><th>Precio de Promocion</th><th>Fecha Inicio</th><th>Fecha Fin</th><th>Ruta de Imagen</th><th></th><th></th><th></th></thead>";
    while ($reg = $res->fetch()) {
        echo "
            <tr>
                <td>$reg[idProducto]</td>
                <td>$reg[nombre_producto]</td>
                <td>$reg[precio_producto]</td>
                <td>$reg[precio_promocion]</td>
                <td>$reg[fecha_inicio]</td>
                <td>$reg[fecha_fin]</td>
                <td>$reg[imagen_producto]</td>
                <td><a href=eliminar_prod_promo.php?idProducto=$reg[idProducto]>
                <i class='fa-solid fa-trash-can'></i></a></td>
                <td></td>
            </tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
    <h1>Productos</h1>
    <?php
    $res = $conexion->query("SELECT * FROM producto WHERE idProducto NOT IN ( SELECT idProducto FROM promocion WHERE fecha_inicio <= CURRENT_DATE AND fecha_fin >= CURRENT_DATE )");
    echo "<div class=tabla>";
    echo "<table>";
    echo "<thead><th>ID</th><th>Nombre</th><th>Precio</th><th>Ruta de Imagen</th><th></th><th></th><th></th></thead>";
    while ($reg = $res->fetch()) {
        echo "<tr>
                <td>$reg[idProducto]</td>
                <td>$reg[nombre_producto]</td>
                <td>$reg[precio_producto]</td>
                <td>$reg[imagen_producto]</td>
                <td><a href=form_promocionar_p.php?idProducto=$reg[idProducto]><i class='fa-solid fa-tag'></i></a></td>
                <td><a href=form_modificar_p.php?idProducto=$reg[idProducto]><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href=eliminar_p.php?idProducto=$reg[idProducto]><i class='fa-solid fa-trash-can'></i></a></td>
            </tr>";
    }
    echo "</table>";
    echo "</div>";

    include("../footer.html");
    ?>
    <script src="../JS/backoffice.js"></script>
</body>

</html>