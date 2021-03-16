<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Michael Salas">
    <title>Home</title>

    <!-- Link de los archivos de estilos css -->
    <link rel="stylesheet" href="vista/css/login.css">
</head>
<body>
    <?php echo $_SESSION['usuario']; ?>
    <a href="datos/logout.php">Cerrar sesión</a>
</body>
</html>
