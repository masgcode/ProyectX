<?php

if (is_file( './datos/DatosLogin.php' )) {
    include './datos/DatosLogin.php';
}
if (is_file( '../datos/DatosLogin.php' )) {
    include '../datos/DatosLogin.php';
}

// Valida si el usuario existe.
function usuarioExiste($nombreUsuario) {

    // Verifica la SESSION.
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }

    $datosLogin = new DatosLogin();
    $resultado = $datosLogin->usuarioExiste($nombreUsuario);

    if ($resultado == 1) {

        $_SESSION['usuario'] = $nombreUsuario;
        return true;

    } else {

        return false;
    }
}
