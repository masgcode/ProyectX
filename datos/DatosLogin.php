<?php

include_once 'Conexion.php';

class DatosLogin extends Conexion
{
    // Se verifica si existe el usuario.
    public function usuarioExiste($nombreUsuario)
    {
        $conexion = $this->getConexion();
        if ($conexion != null) {
            $query = "call iniciar_sesion(?)";
            $statement = $conexion->prepare($query);
            $datos = [
                $nombreUsuario
            ];
            $statement->execute($datos);
            $conexion = null;
            
            return $statement->fetch()[0];;
        }
    }
}
