<?php

require __DIR__. "/src/Modelo/Avaliavel.php";
require __DIR__. "/src/Modelo/Genero.php";
require __DIR__. "/src/Modelo/Titulo.php";
require __DIR__. "/src/Modelo/Episodio.php";
require __DIR__. "/src/Modelo/Serie.php";
require __DIR__. "/src/Modelo/Filme.php";
require __DIR__. "/src/Calculos/CalculadoraDeMaratona.php";
require __DIR__. "/src/Calculos/ConversorNotaEstrela.php";

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