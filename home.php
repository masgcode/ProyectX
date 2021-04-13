<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Inicio</title>

    <!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> -->
    <link rel="stylesheet" href="vista/css/main.css">
</head>

<body>

    <input class="oculto" type="checkbox" id="nav-toggle">
    

    <div class="sidebar">

        <div class="sidebar-brand">
            <h2>
                <span class="lab la-accusoft"></span>
                <span> Michael Salas</span>
            </h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#" id="nav-inicio" class="active">
                        <span class="las la-igloo"></span>
                        <span> Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="nav-proyectos">
                        <span class="las la-users"></span>
                        <span> Proyectos</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="main-content">

        <header>

            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Inicio
            </h2>

            <div class="user-wrapper">
                <img src="vista/css/img/2.jpg" width="30px" height="30px" alt="">
                <div>
                    <h4>Michael Salas</h4>
                </div>
            </div>

        </header>

        <main>

            <div id="app" class="cards"></div>

            <div id="tabla" class="recent-grid">
                
            </div>

        </main>
    </div>

    <script src="js/home.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/inicio.js"></script>
    <script src="js/proyectos.js"></script>
</body>

</html>