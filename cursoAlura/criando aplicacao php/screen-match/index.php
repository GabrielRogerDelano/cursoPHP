<?php

require __DIR__ . "autoload.php";

use ScreenMatch\Modelo\{
    Filme, Serie, Genero, Episodio
};
use ScreenMatch\Calculos\{
    CalculadoraDeMaratona, ConversorNotaEstrela
};

echo "Bem Vindo\n";

$filme1 = new Filme(
    "Tenet",
    2021,
    Genero::FiccaoCientifica,
    180
);

$serie = new Serie("Breaking Bad", 2008, Genero::Drama, 5, 20, 40);
$episodeo = new Episodio($serie, "piloto", 1);


$filme1->avalia(8);
$filme1->avalia(7.2);

$serie->avalia(10);
$serie->avalia(10);

var_dump($filme1);
echo $filme1->media()."\n";
echo $filme1->anoDeLancamento. "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->incluir($filme1);
$calculadora->incluir($serie);
$duracao = $calculadora->duracao();

echo "\nVoce precisara assistir $duracao minutos\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converter($serie)."\n";
echo $conversor->converter($filme1)."\n";
?>