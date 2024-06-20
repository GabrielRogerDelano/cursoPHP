<?php

echo "Bem Vindo \n";

$nomeDoFilme = "Tenet";

$anoDeLancamento = 2024;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0; 

for ($contador = 1; $contador < $argc; $contador++) { 
    $somaDeNotas += $argv[$contador];
}

$notaFinal = $somaDeNotas/ $quantidadeDeNotas;
echo "A nota desse filme é ".$notaFinal."\n";

echo "Nome do Filme = ".$nomeDoFilme."\n";
if ($anoDeLancamento > 2023) {
    echo "Filme lancamento \n";
}elseif (($anoDeLancamento < 2023) && $anoDeLancamento>2021) {
    echo "Filme Recente \n";
}else{
    echo "esse filme nao é lancamento \n";
}

$genero = match($nomeDoFilme){
    "Tenet" => "Complicado",
    "Tarzan" => "Desenho",
    "Titanic"=> "Drama",
    default=> "Genero Desconhecido"
};
echo "O genero desse filme é ".$genero;