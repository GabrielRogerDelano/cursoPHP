<?php

require __DIR__ . "/Modelo/Filme.php";

function exibeMensagemLancamento(int $ano): void {

    if($ano > 2023) {
        echo "Filme lancamento \n";
    } elseif (($ano < 2023) && $ano>2021) {
        echo "Filme Recente \n";
    } else{
        echo "esse filme nao é lancamento \n";
    } 
};

function incluidoNoPlano(bool $planoPrime,int $anoDeLancamento): bool{
    return $planoPrime || $anoDeLancamento < 2020;
};

function criaFilmes(string $nome,int $anoDeLancamento, float $nota, string $genero): Filme
{
    $filme = new Filme();

    $filme->nome = $nome;
    $filme->anoDeLancamento = $anoDeLancamento;
    $filme->nota = $nota;
    $filme->genero = $genero;

    return $filme;
}
