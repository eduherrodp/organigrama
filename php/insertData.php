<?php

namespace php;

//ubicación csv
CONST CSV = '../db/data/data.csv';

//leer csv
$readCsv = array_map('str_get csv', file(CSV));
 //recorremos filas del csv
 foreach ($readCsv as $itemCsv) {
   //recorremos celdas del csv
    foreach ($itemCsv as $elementoItemCSV) {
     //mostramos la celda
     echo $elementoItemCSV;
    }
   }



