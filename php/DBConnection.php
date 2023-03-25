<?php

namespace php;

use PDO;
use PDOException;
class DBConnection {
    /**
     * @var DBConnection|null
     */
    private static ?DBConnection $instance = null;
    /**
     * @var PDO|null
     */
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
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'" // Establece el juego de caracteres para la conexión
        ];
        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            echo "Error de conexión a la base de datos: ", $e->getMessage();
        }
    }
    // Singleton

    /**
     * @return DBConnection
     */
    public static function getInstance(): DBConnection {
        if (!isset(self::$instance)) {
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }
    public function closeConnection(): void {
        $this->conn = null;
    }

    /**
     * @return PDO
     */
    public function getConnection(): PDO
    {
        // Verificar si la conexión a la base de datos está activa antes de devolverla
        if ( !$this->conn ) {
            throw new PDOException("No se pudo establecer la conexión a la base de datos");
        }
        return $this->conn;
    }

    // Ejecutar una consulta en la base de datos y devolver un objeto PDOStatement

    /**
     * @param $sql
     * @param array $params
     * @return array
     */
    public function getRows($sql, array $params = []): array {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }


    // Impide la clonación, serialización y deserialización de la instancia respectivamente
    private function __clone(){}
    public function __sleep(){}
    public function __wakeup(){}
}