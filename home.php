<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Michael Salas">
    <title>Home</title>

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/f10a5c28e4.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="vista/css/home.css">
    <link rel="stylesheet" href="vista/css/tabla.css">
    <link rel="stylesheet" href="vista/css/dashboard.css">

    <!-- JS -->
    <script src="./vista/js/home.js"></script>

</head>
<body>

    <div id="contenedor-preloader">
        <div class="multi-spinner-container">
            <div class="multi-spinner">
                <div class="multi-spinner">
                    <div class="multi-spinner">
                        <div class="multi-spinner">
                            <div class="multi-spinner">
                                <div class="multi-spinner"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor">

        <!-- MENU IZQUIERDA -->
        <div class="contenedor-menu">
            <div class="menu">
            <a class="etiqueta-usuario" href="#">Inicio</a>
                <nav>
                    <a href="#">Entradas</a>
                    <a href="#">Cuarto Limpio</a>
                    <a href="#">Cuarto Sucio</a>
                    <a href="#">Proceso Termico</a>
                    <a href="#">Paletizado</a>
                    <a href="#">Bodega</a>
                    <a href="#">Productividad</a>
                </nav>
            </div>
        </div>
        <!-- MENU IZQUIERDA -->

        <div class="subcontenedor">

            <!-- MENU SUPERIOR -->
            <div id="navbar">
                <a href="#"><?php echo $_SESSION['usuario']; ?></a>
                <a href="datos/logout.php">Cerrar sesión</a>
            </div>
            <!-- MENU SUPERIOR -->
    
            <!-- TABLA -->
            <div id="contenedor-1">
                <div id="encabezado-1">
                <div id="encabezado-2">
                        <label>Colaboradores</label>
                    </div>
                </div>
                <div id="contenedor-2">
                    
                    <div id="insertar">
                        <label id="btn_insertar"><i class="fas fa-plus"></i> Nuevo</label>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>estudiante</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Teléfono</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="id Estudiante">1</td>
                                <td data-label="nombre Estudiante">juan</td>
                                <td data-label="Apellido Estudiante">buriticá</td>
                                <td data-label="edad Estudiante">21</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar">Editar</label><label class="eliminar">Eliminar</label></td>
                            </tr>
                            <tr>
                                <td data-label="id Estudiante">2</td>
                                <td data-label="nombre Estudiante">jose</td>
                                <td data-label="Apellido Estudiante">castaño</td>
                                <td data-label="edad Estudiante">18</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar">Editar</label><label class="eliminar">Eliminar</label></td>
                            </tr>	    	
                            <tr>
                                <td data-label="id Estudiante">3</td>
                                <td data-label="nombre Estudiante">fernado</td>
                                <td data-label="Apellido Estudiante">lopez</td>
                                <td data-label="edad Estudiante">16</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar">Editar</label><label class="eliminar">Eliminar</label></td>
                            </tr>
                            <tr>
                                <td data-label="id Estudiante">1</td>
                                <td data-label="nombre Estudiante">juan</td>
                                <td data-label="Apellido Estudiante">buriticá</td>
                                <td data-label="edad Estudiante">21</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar">Editar</label><label class="eliminar">Eliminar</label></td>
                            </tr>
                            <tr>
                                <td data-label="id Estudiante">2</td>
                                <td data-label="nombre Estudiante">jose</td>
                                <td data-label="Apellido Estudiante">castaño</td>
                                <td data-label="edad Estudiante">18</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar">Editar</label><label class="eliminar">Eliminar</label></td>
                            </tr>	    	
                            <tr>
                                <td data-label="id Estudiante">3</td>
                                <td data-label="nombre Estudiante">fernado</td>
                                <td data-label="Apellido Estudiante">lopez</td>
                                <td data-label="edad Estudiante">16</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar">Editar</label><label class="eliminar">Eliminar</label></td>
                            </tr>
                    </table>
                </div>
            </div>
            <!-- TABLA -->

        </div>
    </div>
    
</body>
</html>
