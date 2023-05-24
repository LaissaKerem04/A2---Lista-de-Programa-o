<?php

$string = $argv[1];

function fazer_lista($string) {
    $n = explode(" ", $string);
    $numero_inteiro = array_map('intval', $n);
    return $numero_inteiro;
}

$n = fazer_lista($string);
var_dump($n);

?>