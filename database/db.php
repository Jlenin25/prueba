<?php

class DB {
    private $host;
    private $db;
    private $user;
    private $pass;

    public function __construct(){
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
    }
    public function connect() {
        try {
            $conex = 'mysql:host='.$this->host.';dbname='.$this->db;
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conex, $this->user, $this->pass, $option);
        } catch(Exception $e) {
            echo 'Error en la conexión a la Base de Datos'.$e->getMessage();
        }
    }
}