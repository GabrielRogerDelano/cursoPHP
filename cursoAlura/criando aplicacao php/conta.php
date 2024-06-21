<?php
//Crie uma sistema de conta bancaria com Consulta dfe saldo, Saque, Deposito, Saida

$titular = [
    "nome" => "Joao",
    "saldo" => 1000
];
$titula2 = [
    "nome" => "Mario",
    "saldo" => 500
];

$clientes = [
    $titular, 
    $titular2
];

echo "=====================\n";
echo "Titular: ". $titular["nome"]."\n";
echo "Saldo: ". $titular["saldo"]."\n";
echo "=====================\n";


do{
    
    echo "1 - Consultar saldo\n";
    echo "2 - Sacar valor\n";
    echo "3 - Depositar volar\n";
    echo "4 - Sair \n";
    echo "digite um valor\n";
    
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "=====================\n";
            echo "Titular: ". $titular["nome"]."\n";
            echo "Saldo: R$ ". $titular["saldo"]."\n";
            echo "=====================\n";
            break;
        
        case 2:
            echo "Qual valor?\n";
            $saque = (float) fgets(STDIN);

            if ($saque > $titular["saldo"]){
                echo "saldo insuficiente\n";
            }else{
                $titular["saldo"] -= $saque;
                echo "saque de R$ ". $saque ." realizado\n\n";
            }
            break;
        
        case 3:
            echo "Qual valor?\n";
            $deposito = (float) fgets(STDIN);

            $titular["saldo"] += $deposito;
            echo "deposito de R$ ". $deposito ." realizado\n\n";
            
            break;

        case 4:
            echo "Encerrando sistema\n";
            break;
        
        default:
            echo "Opção inválido\n";
            break;
    }
}while($opcao != 4)


?>