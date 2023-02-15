<?php

namespace php;

// Impresión del archivo csv
// path: ../db/data/data.csv

// Abrir el archivo csv
$csv = fopen("../db/data/data.csv", "r");

// Leer el archivo csv

while (($data = fgetcsv($csv, 1000)) !== FALSE) {
    // Imprimir el archivo csv
    echo $data[0] . " | " . $data[1] . " | " . $data[2] . " | " . $data[3] . " | " . $data[4] . " | " . $data[5] . " | " . $data[6] . "<br><br>";
}

// Cerrar el archivo csv
fclose($csv);
