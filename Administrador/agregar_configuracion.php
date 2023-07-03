<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Agregar Configuracion</title>
</head>
<body>
    <h1>Agregar Configuracion</h1>
    <form action="cargar_configuracion.php" method="post">
        <label for="logo_empresa">Logo de la Empresa</label>
        <input type="file" name="logo_empresa" accept="image/*" required>
        <input type="text" name="rubro_empresa" placeholder="Rubro de la Empresa" required>
        <input type="text" name="nombre_empresa" placeholder="Nombre de la Empresa" required>
        <input type="text" name="barrio_empresa" placeholder="Barrio de la Empresa" required>
        <input type="text" name="calle_empresa" placeholder="Calle de la Empresa" required>
        <input type="text" name="manzana_empresa" placeholder="Manzana de la Empresa" required>
        <input type="text" name="solar_empresa" placeholder="Solar de la Empresa" required>
        <input type="text" name="comentario_empresa" placeholder="Comentario de la Empresa" required>
        <input type="tel" name="contacto_empresa" placeholder="+598" required>
        <input type="submit" value="Agregar Configuracion">

    <button><a href="pag_admin.php">Volver Atras</a></button>
</body>
</html>