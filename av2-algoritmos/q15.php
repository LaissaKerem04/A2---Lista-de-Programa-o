<?php

$n = intval($argv[1]);

function calcula_media($n) {
    $soma = array_sum($n);
    $quantidade = count($n);
    $media = $soma / $quantidade;
    return $media;
}

$n = array_slice($argv, 1);

$n_float = array_map('floatval', $n);

// Vai calcular a média
$media = calcula_media($n_float);
var_dump($media);

?>