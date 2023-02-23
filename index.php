<?php
//Implementación de la clase DBConnection.php
namespace php;

use DBQuery;

require_once 'php/DBConnection.php';

/**
 * Conexión a la base de datos
 */

// Instanciamos la clase DBConnection
$db = DBConnection::getInstance();

// Preparamos la consulta
$query = "show tables from organigrama";
$statement = $db->getConnection()->prepare($query);

// Ejecutamos la consulta
$statement->execute();

// Obtenemos el resultado
$result = $statement->fetchAll();

