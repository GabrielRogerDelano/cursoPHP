<?php
//Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$array = [1, 2, 2, 2, 2, 2, 2, 2];
$semDuplicados = array_unique($array);
var_dump($semDuplicados);
?>