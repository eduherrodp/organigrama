<?php
//Implementación de la clase DBConnection.php
namespace php;

require_once 'php/DBConnection.php';

/**
 * Conexión a la base de datos
 */

echo "Conexión a la base de datos";
$db = DBConnection::getInstance();



