<?php

class Conexion
{

    // variables de conexion.
    public $server;
    public $user;
    public $password;
    public $db;

    /* constructor */

    public function __construct()
    {   
        // Para servidor local.
        $this->isActive = false;
        $this->server = "localhost"; // Server local de michael.
        //$this->server = "127.0.0.1:33065"; // Server local de la kile y angie.
        $this->user = "root";
        $this->password = "";
        $this->db = "proyectox";
    }

    // metodo de conexion.

    public function getConexion()
    {
        try {
            $dsn  = 'mysql:host=' . $this->server . ';dbname=' . $this->db;
            $conn = new PDO($dsn, $this->user, $this->password, null);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            return null;
        }
    }
}
