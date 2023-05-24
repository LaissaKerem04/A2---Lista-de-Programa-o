<?php

function converte_tempo($t) {
    $horas = intdiv($t, 3600);  
    $minutos = intdiv($t % 3600, 60);  
    $segundos = $t % 60;  
    
  return "{$horas}h{$minutos}m{$segundos}s";
}
$tempo_segundos = intval($argv[1]);
$duracao = converte_tempo($tempo_segundos);
var_dump($duracao);
?>