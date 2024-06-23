<?php
//Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

// Exemplo de uso:
$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);
?>