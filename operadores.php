<?php

$michis_felinos = true;
$michis_4_patas = true;
$michi_vuelan = false;
$michis_programan_con_PHP = false;

// Operacion AND
var_dump( $michis_felinos && $michis_4_patas );
// Operacion OR
var_dump( $michi_vuelan || $michis_4_patas );

echo"\nExperimento\n";

$_res = $michis_4_patas and $michis_programan_con_PHP;
var_dump($_res);

echo"\n";