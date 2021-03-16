<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Michael Salas">

    <link rel="stylesheet" href="vista/css/login.css">
</head>
<body>

    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <form id="loginform" method="POST">
                    <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Usuario" required>

                    <input type="password" id="contrasena" placeholder="Contraseña" name="contrasena" required>

                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                </form>
                <div class="pie-form">
                    <?php
                        if(isset($errorLogin)){
                            echo $errorLogin;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>