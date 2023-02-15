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

/**
 * Llenado de objetos de la clase Persona
 */

// Implementación de la clase DBQuery.php
require_once 'php/DBQuery.php';
// Instancia de la clase DBQuery
$dbQuery = new DBQuery($conn);

/**
 * Llenado de objetos de la clase Persona
 */

// Implementación de la clase Persona.php
require_once 'php/Persona.php';
for ( $i=1; $i < 2; $i++ ) {
    // Instancia de la clase Persona
    $personaObj = $dbQuery->getPersona($i);
    echo $personaObj->getId(), " | ", $personaObj->getNombre(), " | ", $personaObj->getCargo(), " | ", $personaObj->getCorreo(), " | ", $personaObj->getTelefono(), " | ", $personaObj->getCv(), " | ", $personaObj->getFoto(), "<br><br>";

    /**
     * Liberación de recursos
     */
    $personaObj = null;
    $dbQuery = null;
}

/**
 * Cierre de la conexión a la base de datos y liberación de recursos
 */
$db->closeConnection();
$conn = null;


