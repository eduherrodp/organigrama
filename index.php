<?php
//Implementación de la clase DBConnection.php
namespace php;

require_once 'php/DBConnection.php';

// Instancia de la clase DBConnection
$db = DBConnection::getInstance();
// Obtención de la conexión a la base de datos
$conn = $db->getConnection();
// Verificación de la conexión a la base de datos

$conn ? print "Conexión exitosa" : print "Conexión fallida";

// Cierre de la conexión a la base de datos
$db->closeConnection();