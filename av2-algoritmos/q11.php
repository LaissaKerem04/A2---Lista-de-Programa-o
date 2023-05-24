<?php

$numero = intval($argv[1]);

function calcular_sequencia($numero) {
    if ($numero == 1 || $numero == 2) {
        return 1;
    } else {
        $sequencia = [1, 1]; // Vai guardar os dois primeiros elementos da sequência de Fibonacci

        for ($i = 2; $i < $numero; $i++) {
            $sequencia[$i] = $sequencia[$i - 1] + $sequencia[$i - 2];
        }
        return $sequencia[$numero - 1];
    }
}

$elemento = calcular_sequencia($n);
var_dump($elemento);

?>