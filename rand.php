<?php

function sortearNumeros() {

    $qtdNumeros = filter_input(INPUT_GET, 'qtd', FILTER_SANITIZE_NUMBER_INT);

    $minNumero = filter_input(INPUT_GET, 'min', FILTER_SANITIZE_NUMBER_INT);

    $maxNumero = filter_input(INPUT_GET, 'max', FILTER_SANITIZE_NUMBER_INT);

    $num = range($minNumero, $maxNumero);
    shuffle($num);

    $numAleatorio = array_slice($num,0, $qtdNumeros);

    return $numAleatorio;
}


