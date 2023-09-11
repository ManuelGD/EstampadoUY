<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Modificar Configuracion</title>
</head>

<body class="bodymenus">
    <?php
    include("../menu_admin.html");
    require("../Conexion/conexion.php");
    $res = $conexion->query("SELECT * FROM configuracion");
    $reg = $res->fetch();
    ?>
        <form class="form_modificar_config" action="cargar_configuracion.php" method="post">
            <h1>Modificar Configuracion</h1>
            <img src="../imagenes/<?php echo $reg['logo_empresa'] ?>" width="100px">
            <div id="div_file">
                <p id="p_file">Seleccionar Logo</p>
                <input type="file" id="file_logo" name="logo_empresa" accept="image/*" required>
            </div>
            <div class="inputsconfig">
                
                <label for="nombre_empresa">Nombre de la Empresa</label>
                <input type="text" name="nombre_empresa" placeholder="Nombre de la Empresa" value="<?php echo $reg['nombre_empresa'] ?>" required>
                
                <label for="rubro_empresa">Rubro</label>
                <input type="text" name="rubro_empresa" placeholder="Rubro" value="<?php echo $reg['rubro_empresa'] ?>" required>
                
                <label for="barrio">Barrio</label>
                <input type="text" name="barrio" placeholder="Barrio" value="<?php echo $reg['barrio'] ?>" required>
                
                <label for="calle">Calle</label>
                <input type="text" name="calle" placeholder="Calle" value="<?php echo $reg['calle'] ?>" required>
                
                <label for="manzana">Manzana</label>
                <input type="text" name="manzana" placeholder="Manzana" value="<?php echo $reg['manzana'] ?>" required>
                
                <label for="solar">Solar</label>
                <input type="text" name="solar" placeholder="Solar" value="<?php echo $reg['solar'] ?>" required>
                
                <label for="comentario_venta">Moneda</label>
                <input type="text" name="comentario_venta" placeholder="Moneda" value="<?php echo $reg['comentario_venta'] ?>" required>
                
                <label for="contacto_empresa">Numero de telefono</label>
                <input type="tel" name="contacto_empresa" placeholder="Numero de Telefono" value="<?php echo $reg['contacto_empresa'] ?>" required>
                
            </div>
            <input type="submit" value="Modificar Configuracion">
        </form>
    <?php
    include("../footer.html");
    ?>
</body>

</html>