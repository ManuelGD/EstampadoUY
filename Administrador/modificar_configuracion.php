<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Agregar Configuracion</title>
</head>

<body class="bodymenus">
    <?php
    include("../menu_admin.html");
    ?>
        <form class="form_modificar_config" action="cargar_configuracion.php" method="post">
            <h1>Modificar Configuracion</h1>
            <label for="logo_empresa"><i class="fa-solid fa-image"></i> Logo
                <input type="file" name="logo_empresa" accept="image/*" required>
            </label>
            <div class="inputsconfig">
                <input type="text" name="nombre_empresa" placeholder="Nombre de la Empresa" required>
                <input type="text" name="rubro_empresa" placeholder="Rubro" required>
                <input type="text" name="barrio" placeholder="Barrio" required>
                <input type="text" name="calle" placeholder="Calle" required>
                <input type="text" name="manzana" placeholder="Manzana" required>
                <input type="text" name="solar" placeholder="Solar" required>
                <input type="text" name="comentario_venta" placeholder="Moneda" required>
                <input type="tel" name="contacto_empresa" placeholder="+598" required>
            </div>
            <input type="submit" value="Agregar Configuracion">
        </form>
    <?php
    include("../footer.html");
    ?>
</body>

</html>