<?php
/* USO DE VARIABLES */
// Tipo numerico
$numero_1 = 8;
$numero_2 = 7;

echo $numero_1 + $numero_2;

// Tipo String o cadena
$Nombre = "Jesus";
echo"\n";
/* USO DE CONSTANTES */

define("Numero_PI", 3.14);
echo Numero_PI,"\n";
define("Numero_PI", 14);
echo "Al intentar re asignar un valor como constante dara un warning como el que se muestra anteriormente\n";

echo"\n";