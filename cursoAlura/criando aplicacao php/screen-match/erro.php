<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Exception\NotaInvalidaException;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require "autoload.php";

$serie = new Serie("lost", 2007, Genero::FiccaoCientifica, 5, 20, 24);
$episodio = new Episodio($serie, "piloto", 1);
try{
    $episodio->avalia(12);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converter($episodio);
}catch (NotaInvalidaException $e){
    echo "um problema foi encontrado: ". $e->getMessage();
}catch (DivisionByZeroError){
    return '0';
}