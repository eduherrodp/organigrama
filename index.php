<?php
namespace php;

use Persona;

require_once 'php/Persona.php';
require_once 'php/DBConnection.php';

// Configuración de errores
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

// Instancia de la conexión a la base de datos
$db = DBConnection::getInstance();

// Consulta a la base de datos
$sql = "SELECT personas.id, personas.nombre, cargos.cargo, correos.correo, telefonos.telefono, cv.cv, fotos.foto, cargos_a_mostrar.cargo AS cargo_a_mostrar
FROM personas
JOIN cargos ON personas.id_cargo = cargos.id
JOIN correos ON personas.id_correo = correos.id
JOIN telefonos ON personas.id_telefono = telefonos.id
JOIN cv ON personas.id_cv = cv.id
JOIN fotos ON personas.id_foto = fotos.id
LEFT JOIN cargos_a_mostrar ON personas.id_cargo_a_mostrar = cargos_a_mostrar.id WHERE personas.id = ?;";

// Plantilla HTML
$html = file_get_contents('templates/head.html');

// Iteramos sobre los registros
for ($i = 1; $i<=38; $i++) {

    // Obtenemos los datos de la base de datos
    $result = $db->getRows($sql, [$i]);

    if (!empty($result)) {

        // Creamos la instancia de la clase Persona

        $persona = new Persona(
            $result[0]['id'],
            $result[0]['nombre'],
            $result[0]['cargo'],
            $result[0]['correo'],
            $result[0]['telefono'],
            $result[0]['cv'],
            $result[0]['foto'], $result[0]['cargo_a_mostrar'] ?? 'NULL'
        );

        // Rellenamos la plantilla HTML
        $html .= fillTemplate($persona);

        // Liberamos la memoria
        unset($persona);

        // error_log("[INFO query] " . date('d-m-Y H:i:s') . ": Found register with id " . $i . "\n", 3, "error_log.txt");
    } else {
        // $msj = "[ERROR query] " . date('d-m-Y H:i:s') . ": Not found register with id " . $i . "\n";
        // error_log("$msj", 3, "error_log.txt");
    }
}

// Cerramos el div del organigrama
$html .= "</div>";

// Insertamos el JS de Bootstrap
$html .= file_get_contents('templates/bootstrap_js.html');

// Cerramos la etiqueta del div, body y HTML
$html .= "</div></body></html>";

// Mostramos el HTML
echo $html;

/**
 * Devuelve el ID a partir del nombre del cargo y el ID de la persona.
 *
 * @param string $id
 * @param string $cargoAMostrar
 * @return string
 */

function makeId(string $id, string $cargoAMostrar): string {
    $word = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '_', str_replace(['á', 'é', 'í', 'ó', 'ú', 'ñ'], ['a', 'e', 'i', 'o', 'u', 'n'], trim($cargoAMostrar))));
    return $word."_". $id;
}

/**
 * Llena la plantilla HTML de una persona con los datos de la persona proporcionada
 *
 * @param Persona $persona
 * @return string
 */
function fillTemplate(Persona $persona): string {
    // Obtención de la plantilla
    $template = file_get_contents('templates/persona.html');

    // Placeholders de la plantilla
    $placeholders = [
        '{persona}' => $persona->getFoto(),
        '{nombre}' => $persona->getNombre(),
        '{cargo}' => $persona->getCargo(),
        '{correo}' => $persona->getCorreo(),
        '{telefono}' => $persona->getTelefono(),
        '{cv}' => $persona->getCv(),
        '{foto}' => $persona->getFoto(),
        '{telefono_formateado}' => $persona->getTelefonoFormateado(),
        '{id}' => makeId($persona->getId(), $persona->getCargoAMostrar())
    ];
    foreach ($placeholders as $placeholder => $value) {
        $template = str_replace($placeholder, $value, $template);
    }

    $style = "top: " . rand(0, 300) . "px; left: " . rand(0, 300) . "px;";
    $template = str_replace('{style}', $style, $template);

    return str_replace('{cargo_a_mostrar}', $persona->getCargoAMostrar(), $template);
}