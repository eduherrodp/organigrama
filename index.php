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

/**
 * Llenado de objetos de la clase Persona
 */

// Implementación de la clase DBQuery.php
require_once 'php/DBQuery.php';
// Instancia de la clase DBQuery
$dbQuery = new DBQuery($conn);
// Obtención de los datos de la persona
$persona = $dbQuery->getPersonas(1);

/**
 * Cierre de la conexión a la base de datos y liberación de recursos
 */

$db->closeConnection();
$dbQuery = null;
$conn = null;

/**
 * Llenado de objetos de la clase Persona
 */

// Implementación de la clase Persona.php
require_once 'php/Persona.php';
// Instancia de la clase Persona
$personaObj = new Persona($persona['id'], $persona['nombre'], $persona['cargo'], $persona['correo'], $persona['telefono'], $persona['cv'], $persona['foto']);

$db->closeConnection();
$persona = null;


// Getters

echo "Datos de la persona<br>----getId<br>";
echo $personaObj->getId();
echo "<br>----getNombre<br>";
echo $personaObj->getNombre();
echo "<br>----getCargo<br>";
echo $personaObj->getCargo();
echo "<br>----getCorreo<br>";
echo $personaObj->getCorreo();
echo "<br>----getTelefono<br>";
echo $personaObj->getTelefono();
echo "<br>----getCv<br>";
echo $personaObj->getCv();
echo "<br>----getFoto<br>";
echo $personaObj->getFoto();
echo "<br><br><br>";

/**
 * Cierre de la conexión a la base de datos y liberación de recursos
 */