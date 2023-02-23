<?php
//Implementación de la clase DBConnection.php
namespace php;

require_once 'php/DBConnection.php';

/**
 * Conexión a la base de datos
 */

$db = DBConnection::getInstance();
$conn = $db->getConnection();

// Consulta a la base de datos
$sql = "SELECT * FROM persona";

// Utilizacion del método query de la clase DBConnection

$data = $db->query($sql);

// Iteración de los resultados de la consulta
foreach ($data as $row) {
    echo $row['nombre'];
}

// Cierre de la conexión a la base de datos
$db->closeConnection();








