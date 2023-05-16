<?php

require 'vendor/autoload.php';

use cursoAlura\BuscadorDeCursos\buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscardor = new Buscador($client, $crawler);
$cursos = $buscardor->buscar(url:'cursos-online-programacao/php');

foreach($cursos as $curso){
    echo $curso . PHP_EOL;
}
?>