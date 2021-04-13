<?php

include_once 'Conexion.php';
include '../dominio/Proyecto.php';
include '../dominio/Tarea.php';

class DatosProyectos extends Conexion
{
    public function consultarProyectos()
    {
        $conexion = $this->getConexion();
        $proyectos = [];
        if ($conexion != null) {
            
            $query = "call consultar_proyectos()";
            $statement = $conexion->prepare($query);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_BOTH)) {
                $proyecto = new Proyecto();
                $proyecto->setId($row['0']);
                $proyecto->setNombre($row['1']);
                array_push($proyectos, $proyecto);
            }
            $conexion = null;
            
            return $proyectos;
        }
    }

    public function consultarTareas($id)
    {
        $conexion = $this->getConexion();
        $tareas = [];
        if ($conexion != null) {
            
            $query = "call consultar_tareas(?)";
            $statement = $conexion->prepare($query);
            $datos = [
                $id
            ];
            $statement->execute($datos);
            while ($row = $statement->fetch(PDO::FETCH_BOTH)) {
                $tarea = new Tarea();
                $tarea->setId($row['0']);
                $tarea->setNombre($row['1']);
                $tarea->setCodigo($row['2']);
                $tarea->setEstado($row['3']);
                array_push($tareas, $tarea);
            }
            $conexion = null;
            
            return $tareas;
        }
    }
}
