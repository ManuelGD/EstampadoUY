<?php
session_start();
if ($_SESSION['idRol'] != '1') {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Pagina de Administrador</title>
</head>

<body class="bodymenus">
    <?php
        include("../menu_admin.html");
        require("../Conexion/conexion.php");

        $res = $conexion->query("SELECT * FROM configuracion");
        while ($reg = $res->fetch()) {
            echo "<div class=container_config>";
            echo "<div class=config><img src=../imagenes/$reg[logo_empresa] width=300px></div>";
            echo "<div class=config>Nombre: $reg[nombre_empresa]</div>";
            echo "<div class=config>Rubro: $reg[rubro_empresa]</div>";
            echo "<div class=config>Dirección: Barrio $reg[barrio], Calle $reg[calle], Manzana $reg[manzana], Solar $reg[solar]</div>";
            echo "<div class=config>Contacto: $reg[contacto_empresa]</div>";
            echo "</div>";
        }
        include("../footer.html");
    ?>
</body>

</html>