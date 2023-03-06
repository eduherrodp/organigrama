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

for($i = 1; $i<=38; $i++) {
    // Complete the query with the id
    $result = $db->getRows($sql, [$i]);

    if (!empty($result)) {
        // Implementación de la clase Persona
        // Pasamos a variables locales los valores de la consulta

        $id = $result[0]['id'];
        $nombre = $result[0]['nombre'];
        $cargo = $result[0]['cargo'];
        $correo = $result[0]['correo'];
        $telefono = $result[0]['telefono'];
        $cv = $result[0]['cv'];
        $foto = $result[0]['foto'];

        // Mostramos los valores de la consulta
        echo "id: " . $id . "\t" . "nombre: " . $nombre . "\t" . "cargo: " . $cargo . "\t" . "correo: " . $correo . "\t" . "telefono: " . $telefono . "\t" . "cv: " . $cv . "\t" . "foto: " . $foto . "\n";
        //Liberación de memoria
        // unset($persona);
    } else {
        echo "No se encontró el registro con id " . $i . "\n";
    }
}
// Close the connection
$db->closeConnection();









