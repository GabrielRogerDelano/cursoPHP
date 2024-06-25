<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require "autoload.php";

$serie = new Serie("lost", 2007, Genero::FiccaoCientifica, 5, 20, 24);
$episodio = new Episodio($serie, "piloto", 1);

$conversor = new ConversorNotaEstrela();
echo $conversor->converter($episodio);