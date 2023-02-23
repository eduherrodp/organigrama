<?php
//Implementación de la clase DBConnection.php
namespace php;

require_once 'php/DBConnection.php';

/**
 * Conexión a la base de datos
 */

$db = DBConnection::getInstance();
$sql = "SELECT * FROM personas";
$stmt = $db->query($sql);
$rows = $stmt->fetchAll();

// Show the result
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Cargo</th><th>Correo</th><th>Teléfono</th><th>CV</th><th>Foto</th></tr>";
foreach ($rows as $row) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['cargo'] . "</td>";
    echo "<td>" . $row['correo'] . "</td>";
    echo "<td>" . $row['telefono'] . "</td>";
    echo "<td>" . $row['cv'] . "</td>";
    echo "<td>" . $row['foto'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Close the connection
$db->closeConnection();









