<?php

namespace php;

use PDO;
use PDOException;
use PDOStatement;

class DBConnection {
    private static ?DBConnection $instance = null;
    private ?PDO $conn = null;
    private string $host;
    private string $user;
    private string $pass;
    private string $db;
    private string $port;

    private const DRIVER = 'mysql';

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
        $dsn = self::DRIVER . ":host=$this->host;port=$this->port;dbname=$this->db;charset=utf8mb4";
        $options = [
            PDO::ATTR_EMULATE_PREPARES => false, // Desactiva la emulación de consultas para evitar inyección de código
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4' COLLATE 'utf8mb4_unicode_ci" // Establece el juego de caracteres para la conexión
        ];
        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            echo "Error de conexión a la base de datos: ", $e->getMessage();
            http_response_code(400);
        }
    }
    // Singleton
    public static function getInstance(): DBConnection {
        if (!isset(self::$instance)) {
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }
    public function closeConnection(): void {
        $this->conn = null;
    }

    public function getConnection(): PDO
    {
        // Verificar si la conexión a la base de datos está activa antes de devolverla
        if ( !$this->conn ) {
            throw new PDOException("No se pudo establecer la conexión a la base de datos");
        }
        return $this->conn;
    }

    // Ejecutar una consulta en la base de datos y devolver un objeto PDOStatement
    public function query($sql, $params = []): PDOStatement {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    // Obtener una fila de la base de datos
    public function getRow($sql): ?array {
        $stmt = $this->query($sql);
        return $stmt->fetch();
    }

    // Obtener varias filas de la base datos
    public function getRows($sql): array {
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    // Impide la clonación, serialización y deserialización de la instancia respectivamente
    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}
}