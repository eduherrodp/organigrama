<?php

namespace php;

use PDO;
use PDOException;

class DBConnection {
    private static $instance;
    private $conn;
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;

    // Constructor de la clase DBConnection

    private function __construct() {
        // Importación de variables de configuración config.php
        require_once 'config.php';
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->db = DB_NAME;
        $this->port = DB_PORT;

        // Creación de la conexión a la base de datos, manejo de errores y excepciones
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
    // Implementación del patron Singleton para la conexión a la base de datos, el cual solo permite una instancia de la clase
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }
    public function closeConnection() {
        $this->conn = null;
    }

    public function getConnection() {
        return $this->conn;
    }

}