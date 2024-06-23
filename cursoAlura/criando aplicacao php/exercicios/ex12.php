<?php
//Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha
$arquivo = fopen('ex12.txt', 'a+');
$primeiraLinha = fgets($arquivo);
var_dump($primeiraLinha);

$segundaFrase = "Adicionando nova frase";

fwrite($arquivo, $segundaFrase);


var_dump($arquivo);
fclose($arquivo);
?>