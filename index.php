<?php
////Implementación de la clase DBConnection.php
//namespace php;
//
//use DBQuery;
//
//require_once 'php/DBConnection.php';
//
///**
// * Conexión a la base de datos
// */
//
//// Instancia de la clase DBConnection
//$db = DBConnection::getInstance();
//// Obtención de la conexión a la base de datos
//$conn = $db->getConnection();
//
///**
// * Consulta a la base de datos y llenado de objetos de la clase Persona
// */
//
//// Instancia de la clase DBQuery
//
//$query = new DBQuery($conn);
//
//// Obtenemos los datos de la persona con ID = 1
//$persona = $query->getPersona(1);
//
//// Imprimimos los datos de la persona
//echo $persona->getId() . "<br>";
//echo $persona->getNombre() . "<br>";
//
//// Cerrar conexión
//$db->closeConnection();
echo 'Versión actual de PHP: ' . phpversion();