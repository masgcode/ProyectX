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

    <!-- LOADER SPPINER -->
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
    <!-- LOADER SPPINER -->

    <div class="contenedor">

        <!-- MENU IZQUIERDA -->
        <div class="contenedor-menu">
            <div class="item">
                <a href="#">
                    <div class="icono"><i class="fas fa-bars"></i></div>
                    <div class="titulo">Inicio</div>
                </a>
                <a href="#">
                    <div class="icono"><i class="fas fa-box"></i></div>
                    <div class="titulo">Lote de materiales</div>
                </a>
                <a href="#">
                    <div class="icono"><i class="fas fa-boxes"></i></div>
                    <div class="titulo">Ingreso de palmito</div>
                </a>
                <a href="#">
                    <div class="icono"><i class="fas fa-burn"></i></div>
                    <div class="titulo">Consumo de materiales</div>
                </a>
                <a href="#">
                    <div class="icono"><i class="fas fa-chart-bar"></i></div>
                    <div class="titulo">Productividad</div>
                </a>
                <a href="#">
                    <div class="icono"><i class="fas fa-industry"></i></div>
                    <div class="titulo">Esterelizacion</div>
                </a>
                <a href="#">
                    <div class="icono"><i class="fas fa-ruler"></i></div>
                    <div class="titulo">Salidas de productos</div>
                </a>
            </div>
        </div>
        <!-- MENU IZQUIERDA -->

        <div class="subcontenedor">

            <!-- MENU SUPERIOR -->
            <div class="navbar">
                <a href="#"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['usuario']; ?></a>
                <a href="datos/logout.php">Cerrar sesión</a>
            </div>
            <!-- MENU SUPERIOR -->
    
            <!-- TABLA -->
            <div class="contenedor-tabla">
                <div class="encabezado-off">
                    <div class="encabezado-on">
                        <label>Colaboradores</label>
                    </div>
                </div>
                <div class="sub-contenedor-tabla">
                    
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
                                <td data-label="accion"><label class="editar"> <i class="far fa-edit"></i> Editar</label><label class="eliminar">Eliminar <i class="far fa-trash-alt"></i></label></td>
                            </tr>
                            <tr>
                                <td data-label="id Estudiante">2</td>
                                <td data-label="nombre Estudiante">jose</td>
                                <td data-label="Apellido Estudiante">castaño</td>
                                <td data-label="edad Estudiante">18</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar"> <i class="far fa-edit"></i> Editar</label><label class="eliminar">Eliminar <i class="far fa-trash-alt"></i></label></td>
                            </tr>	    	
                            <tr>
                                <td data-label="id Estudiante">3</td>
                                <td data-label="nombre Estudiante">fernado</td>
                                <td data-label="Apellido Estudiante">lopez</td>
                                <td data-label="edad Estudiante">16</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar"> <i class="far fa-edit"></i> Editar</label><label class="eliminar">Eliminar <i class="far fa-trash-alt"></i></label></td>
                            </tr>
                            <tr>
                                <td data-label="id Estudiante">1</td>
                                <td data-label="nombre Estudiante">juan</td>
                                <td data-label="Apellido Estudiante">buriticá</td>
                                <td data-label="edad Estudiante">21</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar"> <i class="far fa-edit"></i> Editar</label><label class="eliminar">Eliminar <i class="far fa-trash-alt"></i></label></td>
                            </tr>
                            <tr>
                                <td data-label="id Estudiante">2</td>
                                <td data-label="nombre Estudiante">jose</td>
                                <td data-label="Apellido Estudiante">castaño</td>
                                <td data-label="edad Estudiante">18</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar"> <i class="far fa-edit"></i> Editar</label><label class="eliminar">Eliminar <i class="far fa-trash-alt"></i></label></td>
                            </tr>	    	
                            <tr>
                                <td data-label="id Estudiante">3</td>
                                <td data-label="nombre Estudiante">fernado</td>
                                <td data-label="Apellido Estudiante">lopez</td>
                                <td data-label="edad Estudiante">16</td>
                                <td data-label="telefono">455754</td>
                                <td data-label="accion"><label class="editar"> <i class="far fa-edit"></i> Editar</label><label class="eliminar">Eliminar <i class="far fa-trash-alt"></i></label></td>
                            </tr>
                    </table>
                </div>
            </div>
            <!-- TABLA -->

        </div>
    </div>
    
</body>
</html>
