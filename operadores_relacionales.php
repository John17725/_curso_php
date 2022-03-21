<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// IGUAL
var_dump( $a == $b);
// IDENTICO
var_dump( $a === $b2);
// Diferente
var_dump( $a != $b);
// Diferente identico
var_dump( $a !== $b2);
// Menor que
var_dump( $c < $b);
// Mayor que
var_dump( $a > $d);

$edad_pepito = 23;
echo $edad_juanito ?? $edad_pepito;


echo"\n";