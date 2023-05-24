<?php

$string = $argv[1];

function calcula_media($string) {
    $n = explodir(" ", $string);
    $n_float = array_map('floatval', $n);
    $soma = array_sum($n_float);
    $quantidade = count($n_float);
    $media = $soma / $quantidade;
    return $media;
}

$media = calcula_media($string);
var_dump($media);

?>