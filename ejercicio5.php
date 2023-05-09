<?php

require_once('Libro.php');

$libro1 = new Libro ("los pepo","juan",2013);
$libro1->mostrarDetalles();

$libro2 = new Libro ("las gomitas","samuel",2022);
$libro2->mostrarDetalles();