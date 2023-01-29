<?php
//Implementación de la clase DBConnection.php
namespace php;

use DBQuery;
use Persona;

require_once 'php/DBConnection.php';

/**
 * Conexión a la base de datos
 */

// Instancia de la clase DBConnection
$db = DBConnection::getInstance();
// Obtención de la conexión a la base de datos
$conn = $db->getConnection();
// Verificación de la conexión a la base de datos
$conn ? print "Conexión exitosa" : print "Conexión fallida";

/**
 * Llenado de objetos de la clase Persona
 */

// Implementación de la clase DBQuery.php
require_once 'php/DBQuery.php';
// Instancia de la clase DBQuery
$dbQuery = new DBQuery($conn);
// Obtención de los datos de la persona
$persona = $dbQuery->getPersonas(1);
// Verificación de la obtención de los datos de la persona
$persona ? print_r($persona) : print "No se encontró la persona";

/**
 * Cierre de la conexión a la base de datos y liberación de recursos
 */

$db->closeConnection();
$conn = null;

/**
 * Llenado de objetos de la clase Persona
 */

// Implementación de la clase Persona.php
require_once 'php/Persona.php';
// Instancia de la clase Persona
$persona = new Persona($persona['id'], $persona['nombre'], $persona['cargo'], $persona['correo'], $persona['telefono'], $persona['cv'], $persona['foto']);

// Getters
echo $persona->getId();
echo $persona->getNombre();
echo $persona->getCargo();
echo $persona->getCorreo();
echo $persona->getTelefono();
echo $persona->getCv();
echo $persona->getFoto();

/**
 * Cierre de la conexión a la base de datos y liberación de recursos
 */

$db->closeConnection();
$persona = null;