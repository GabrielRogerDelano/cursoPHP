<?php
/* Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela. */

$cliente =[
    "nome" => "Joao",
    "saldo" => 1000
];
print "O cliente ".$cliente['nome'] ." Tem um saldo de R$ ". $cliente['saldo'];
?>