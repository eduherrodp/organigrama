<?php
//Implementación de la clase DBConnection.php

namespace php;

use Persona;

include 'php/Persona.php';
require_once 'php/DBConnection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Conexión a la base de datos
 */

$db = DBConnection::getInstance();

// Consultamos únicamente un registro por iteración para evitar el uso de memoria innecesario

$sql = "SELECT personas.id, personas.nombre, cargos.cargo, correos.correo, telefonos.telefono, cv.cv, fotos.foto FROM personas JOIN cargos ON personas.id_cargo = cargos.id JOIN correos ON personas.id_correo = correos.id JOIN telefonos ON personas.id_telefono = telefonos.id JOIN cv ON personas.id_cv = cv.id JOIN fotos ON personas.id_foto = fotos.id WHERE personas.id = ?;";

// Add head to the html
echo file_get_contents('templates/head.html');

for ($i = 1; $i<=38; $i++) {
    // Complete the query with the id
    $result = $db->getRows($sql, [$i]);

    if (!empty($result)) {

        // Posiblemente, se pueda realizar de una mejor manera, pero funciona
        // Insertamos el div container
        if ($i == 1) {
            echo '<div class="container_organigrama">';
        }

        // Implementación de la clase Persona
        $persona = new Persona($result[0]['id'], $result[0]['nombre'], $result[0]['cargo'], $result[0]['correo'], $result[0]['telefono'], $result[0]['cv'], $result[0]['foto']);
        // Llenado de la plantilla con los datos de la base de datos
        echo fillTemplate($persona);
        // Liberación de memoria
        unset($persona);
    } else {
        $msj = "[ERROR query] " . date('d-m-Y H:i:s') . ": Not found register with id " . $i . "\n";
        error_log("$msj", 3, "error_log.txt");
    }
}
// Close the div container
echo '</div>';

// Insertamos el js de bootstrap
echo file_get_contents('templates/bootstrap_js.html');

// close the html
echo "</html>";


/**
 * @param Persona $persona
 * @return string
 */

function fillTemplate(Persona $persona): string {
    // Obtención de la plantilla
    $template = file_get_contents('templates/persona.html');
    // Reemplazo de los valores de la plantilla con los de la base de datos
    $template = str_replace('(persona)', $persona->getFoto(), $template);
    $template = str_replace('(nombre)', $persona->getNombre(), $template);
    $template = str_replace('(cargo)', $persona->getCargo(), $template);
    $template = str_replace('(correo)', $persona->getCorreo(), $template);
    $template = str_replace('(telefono)', $persona->getTelefono(), $template);
    $template = str_replace('(cv)', $persona->getCv(), $template);
    /** @var string $template */
    $template = str_replace('(foto)', $persona->getFoto(), $template);
    // Mostrar la plantilla
    return $template;
}