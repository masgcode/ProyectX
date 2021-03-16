<?php

include_once 'controladora/ControladoraLogin.php';

// Existe un usuario en SESSION ya guardado.
if (isset($_SESSION['usuario'])) {

    include_once 'home.php';

} else if (isset($_POST['nombreUsuario'])) { // Cuando se ingresa datos del formulario.

    // Verifica que los datos ingresados existan el base de datos.
    if (usuarioExiste($_POST['nombreUsuario'])) {

        include_once 'home.php';

    } else { // Si son incorrectos, mostrar un mensaje.

        $errorLogin = "Nombre de usuario y/o contraseña incorrecto";
        include_once 'login.php';
    }
} else {

    include_once 'login.php';
}