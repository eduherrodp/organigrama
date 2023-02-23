<?php

namespace php;

use MongoDB\Driver\Exception\ConnectionException;
use PDO;
use PDOException;

class DBConnection {
    private static ?DBConnection $instance = null;
    private $conn;
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;

    const DRIVER = 'mysql';

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
            $dsn = self::DRIVER . ":host=$this->host;port=$this->port;dbname=$this->db;charset=utf8mb4";
            $options = [
                PDO::ATTR_EMULATE_PREPARES => false, // Desactiva la emulación de consultas para evitar inyección de código
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4' COLLATE 'utf8mb4_unicode_ci" // Establece el juego de caracteres para la conexión
            ];
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            error_log("Error de conexión a la base de datos", $e->getMessage());
            http_response_code(500);
            die("Error de conexión a la base de datos. Por favor, inténtelo de nuevo más tarde");
        }
    }
    // Singleton
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
        // Verificar si la conexión a la base de datos está activa antes de devolverla
        if ( !$this->conn || $this->conn->getAttribute(PDO::ATTR_CONNECTION_STATUS)) {
            throw new ConnectionException("No se pudo establecer la conexión a la base de datos");
        }
        return $this->conn;
    }

    // Ejecutar una consulta en la base de datos y devolver un objeto PDOStatement
    public function query($sql, $params = []) {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    // Obtener una fila de la base de datos
    public function getRow($sql, $params = []) {
        $stmt = $this->query($sql);
        return $stmt->fetch();
    }

    // Obtener varias filas de la base datos
    public function getRows($sql, $params = []) {
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    // Impide la clonación, serialización y deserialización de la instancia respectivamente
    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}
}