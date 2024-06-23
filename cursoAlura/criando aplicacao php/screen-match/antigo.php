<?php

require  __DIR__."/src/Modelo/Filme.php";
require  __DIR__."/src/funcoes.php";

echo "Bem Vindo \n";

$nomeDoFilme = "Tenet";
$anoDeLancamento = 2024;

$quantidadeDeNotas = $argc - 1;
$notas = []; 

for ($contador = 1; $contador < $argc; $contador++) { 
    $notas[] = (float) $argv[$contador];
}

//var_dump($notas);
/*$somaDeNotas = 0;
foreach ($notas as $nota){
    $somaDeNotas += $nota;
}
*/
$notaFinal = array_sum($notas)/ $quantidadeDeNotas;
$planoPrime = TRUE;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoDeLancamento);

echo "Nome do filme: ".$nomeDoFilme."\n";
echo "A nota desse filme: ".$notaFinal."\n";
echo "Ano de lancamento: ".$anoDeLancamento."\n";

exibeMensagemLancamento($anoDeLancamento);

$genero = match($nomeDoFilme){
    "Tenet" => "Complicado",
    "Tarzan" => "Desenho",
    "Titanic"=> "Drama",
    default=> "Genero Desconhecido"
};
echo "O genero desse filme é ".$genero;

$filme=criaFilmes(
    nome : "Thor: Ragnarok",
    anoDeLancamento: 2018,
    nota :7.8,
    genero:  "Ação",
);
    

var_dump($filme->nome);
$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__. '/filme.json', $filmeComoStringJson);
