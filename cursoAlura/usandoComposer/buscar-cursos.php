<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client();
$resposta = $cliente->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$curso = $crawler->filter('card-curso_nome');

foreach ($cursos as $curso){
    echo $curso->textContent . PHP_EOL;
}