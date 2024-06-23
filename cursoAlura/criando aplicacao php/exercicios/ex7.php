<?php
//Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2, // Aqui você poderia pensar no caso de divisão por 0 ;-)
        'multiplicação' => $numero1 * $numero2,
    };
}

echo "Qual operacao deseja realiza ?\n";
$operacao = (string) fgets(STDIN);

echo "Qual o primeiro valor?\n";
$valor1 = (float) fgets(STDIN);

echo "Qual o segundo valor?\n";
$valor2 = (float) fgets(STDIN);

echo operacaoMatematica($valor1, $valor2, $operacao);
?>