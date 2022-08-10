<?php

require "Clases/Materiales.php";
require "Clases/Vehiculo.php";
require "Helpers/Vehiculo.php";

use Clases\Vehiculo;
use Helpers\Vehiculo as HelpV;


$variable = new HelpV;

$carro1 = new Vehiculo(6);
$carro1->color = "Azul";
$carro1->setCilindro(4);

echo "El color del carro es:" . $carro1->color;
