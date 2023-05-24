<?php

    $inicio_1 = intval($argv[1]);
    $fim_1 =intval($argv[2]);
    $inicio_2 = intval($argv[3]);
    $fim_2 = intval($argv[4]);

function verifica_conflito($inicio_1, $fim_1, $inicio_2, $fim_2) {
    
    if ($inicio_1 < $fim_2 && $inicio_2 < $fim_1) {
        return false; // Aqui haverá conflito
    } else {
        return true; // Aqui não haverá conflito
    }
}

$conflito_reserva = verifica_conflito($inicio_1, $fim_1, $inicio_2, $fim_2);
var_dump($conflito_reserva);

?>