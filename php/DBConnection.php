<?php

namespace php;

use PDO;
use PDOException;

/**
 * La clase DBConnection es un Singleton que permite la conexión a la base de datos
 */
class DBConnection {
    private static ?DBConnection $instance = null;
    private ?PDO $conn = null;
    private string $host;
    private string $user;
    private string $pass;
    private string $db;
    private string $port;

    private const DRIVER = 'mysql';

    /**
     *Crea una nueva instnacia de la clase DBConnection y establece la conexión a la base de datos.
     * El constructor es privado para eviar la creación de múltiples instancias de la clase.
     * Maneja errores y excepciones durante la conexión a la base de datos.
     */
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
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'"
        ];
        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            error_log("Error de conexión a la base de datos: " . $e->getMessage());
            throw new PDOException("No se pudo establecer la conexión a la base de datos");
        }
    }


    /**
     * Devuelve la única instancia de la clase DBConnection
     * Utiliza el patrón Singleton para asegurarse de que solo se crea una única instancia de la clase
     * @return DBConnection
     */
    public static function getInstance(): DBConnection {
        if (!isset(self::$instance)) {
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }

    /**
     * Cierra la conexión a la base de datos.
     * @return void
     */
    public function closeConnection(): void {
        $this->conn = null;
    }

    /**
     * Devuelve una instancia de la conexión a la base de datos.
     *
     * @throws PDOException Si no se pudo establecer la conexión a la base de datos
     * @return PDO Instancia de la conexión a la base de datos
     */
    public function getConnection(): PDO {
        if ( !$this->conn ) {
            error_log("No se pudo establecer la conexión a la base de datos");
            throw new PDOException("No se pudo establecer la conexión a la base de datos");
        }
        return $this->conn;
    }

    /**
     * Devuelve una instancia de la conexión a la base de datos.
     * @throws PDOException Si no se pudo establecer la conexión a la base de datos
     * @param string $sql
     * @param array $params
     * @return array PDO instancia de la conexión a la base de datos
     */
    public function getRows(string $sql, array $params = []): array {
        $stmt = $this->getConnection()->prepare($sql);
        try {
            $stmt->execute($params);
        } catch (PDOException $e) {
            error_log("Error al ejecutar la consulta: " . $e->getMessage());
            throw new PDOException("Error al ejecutar la consulta");
        }
        return $stmt->fetchAll();
    }


    // Impide la clonación, serialización y deserialización de la instancia respectivamente
    private function __clone(){}
    public function __sleep(){}
    public function __wakeup(){}
}