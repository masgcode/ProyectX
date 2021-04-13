<?php

class Tarea
{
    public $id;
    public $nombre;
    public $codigo;
    public $estado;

    // contructor multiparametro php.
    function __construct()
    {
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor = '__construct' . $num_params;
        if (method_exists($this, $funcion_constructor)) {
            call_user_func_array(array($this, $funcion_constructor), $params);
        }
    }

    function __construct0() {}

    function __construct4($id, $nombre, $codigo, $estado)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->estado = $estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function getEstado() {
        return $this->estado;
    }
}
