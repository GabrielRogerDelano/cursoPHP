<?php

require __DIR__. "/src/Modelo/Filme.php";

echo "Bem Vindo\n";

$filme1 = new Filme(
    "Tenet",
    2021,
    "ficcao cientifica",
);

$filme1->definirAnolncamento(2022);

$filme1->avalia(8);
$filme1->avalia(7.2);

var_dump($filme1);
echo $filme1->media()."\n";
echo $filme1->anoLancamento();

?>