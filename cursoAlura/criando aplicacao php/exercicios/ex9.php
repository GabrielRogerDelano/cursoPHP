<?php
//Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [10, 6, 7, 8, 9, 8.7];

rsort($notas);
echo "As 3 maiores notas são $notas[0], $notas[1], $notas[2]";
?>