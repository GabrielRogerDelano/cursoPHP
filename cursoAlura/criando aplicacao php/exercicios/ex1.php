<?php
//Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

for($contador = 0; $contador < 100; $contador++){
    if($contador%2){
        echo $contador ." é impar\n";
    }
}