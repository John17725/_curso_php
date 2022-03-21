<?php

$_segundos = readline("Ingresa el tiempo en segundos: ");
$_horas = (int) ($_segundos / 3600);

$_segundos = (int) ($_segundos % 3600);
$_minutos = (int) ($_segundos / 60);
$_segundos = (int) ($_segundos % 60);
echo "Son $_horas horas, $_minutos minutos y $_segundos segundos";

echo"\n";