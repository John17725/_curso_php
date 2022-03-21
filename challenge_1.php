<?php


$horas = readline("Ingresa el numero de horas: ");
$minutos = readline("Ingresa el numero de minutos: ");
$segundos = readline("Ingresa el numero de segundos: ");
echo"En $horas horas con $minutos minutos y $segundos segundos";
$segundos = $segundos + (3600*$horas) + (60*$minutos);
echo" hay $segundos segundos\n";

echo"\n";