<?php
//Implementación de la clase DBConnection.php
namespace php;

use Persona;

require_once 'php/DBConnection.php';

/**
 * Conexión a la base de datos
 */

$db = DBConnection::getInstance();

/*Desde aquí se comenzará a iterar*/

// Consultamos únicamente un registro por iteración para evitar el uso de memoria innecesario

$sql = "SELECT personas.id, personas.nombre, cargos.cargo, correos.correo, telefonos.telefono, cv.cv, fotos.foto FROM personas JOIN cargos ON personas.id_cargo = cargos.id JOIN correos ON personas.id_correo = correos.id JOIN telefonos ON personas.id_telefono = telefonos.id JOIN cv ON personas.id_cv = cv.id JOIN fotos ON personas.id_foto = fotos.id WHERE personas.id = ?;";

for($i = 1; $i<=5; $i++) {
    $result = $db->getRows($sql, [$i]);
    // Implementación de la clase Persona
    $persona = new Persona($result[0]['id'], $result[0]['nombre'], $result[0]['cargo'], $result[0]['correo'], $result[0]['telefono'], $result[0]['cv'], $result[0]['foto']);
    // Datos persona
    echo $persona->getId() . " " . $persona->getNombre() . "\n\n";

    // Liberación de memoria
    unset($result);
    unset($persona);
}

// Close the connection
$db->closeConnection();









