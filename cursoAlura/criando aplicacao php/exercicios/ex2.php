<?php
//Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$altura = $argv[1];
$peso = $argv[2];
$imc = $peso/($altura**2);

echo "Seu IMC é ". $imc;