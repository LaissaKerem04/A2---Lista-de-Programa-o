<?php

$numero = intval($argv[1]);

function calcula($numero) {
    if ($numero == 0 || $numero == 1) {
        return 1;
    } else {
        $fatorial = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $n_fatorial *= $i;
        }
        return $n_fatorial;
    }
}

$n_fatorial = calcula($numero);

var_dump($n_fatorial);

?>