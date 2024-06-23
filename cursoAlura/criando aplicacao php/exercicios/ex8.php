<?php
//Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    $altura = 1.73;
    $peso = 65;

    return $peso / $altura ** 2;
}
?>