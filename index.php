<?php
//Implementación de la clase DBConnection.php
namespace php;

use DBQuery;

require_once 'php/DBConnection.php';

/**
 * Conexión a la base de datos
 */

// Instancia de la clase DBConnection
$db = DBConnection::getInstance();
// Obtención de la conexión a la base de datos
$conn = $db->getConnection();
ncia de la clase DBQuery
$dbQuery = new DBQuery($conn);

// Cierre de la conexión a la base de datos y liberación de recursos

$db->closeConnection();
$conn = null;


