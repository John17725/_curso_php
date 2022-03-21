<?php
echo"Antes del casting\n";
$numero = "20";
var_dump( $numero );
$numero = ( int ) $numero;
echo"Despues del casting\n";
var_dump( $numero ); 

echo"=========EJEMPLO=2============\n";


$dias = 5.89;
$dias = (int) $dias;
var_dump( $dias );

echo"=========EJEMPLO=3============\n";
$flag = 0;
$flag = (bool) $flag;
var_dump( $flag );


echo"\n";