<?php

$x1 =  intval($argv[1]);
$y1 =  intval($argv[2]);
$x2 =  intval($argv[3]);
$y2 =  intval($argv[4]);

$diferenca_de_x = $x2 - $x1;
$diferenca__de_y = $y2 - $y1;

$distancia_dos_pontos = sqrt(($diferenca_de_x ** 2) + ($diferenca_de_y ** 2));

var_dump($distancia_dos_pontos);

?>