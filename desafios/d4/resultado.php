<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h2>conversor de moedas v1.0</h2>
        <pre>
        <?php

            $inicio = date("m-d-Y" , strtotime("-7 days "));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $real = $_GET["valor"] ?? 0 ;
            $dolar = $real/$cotacao;


            echo "<p>Seus R$<strong>".number_format($real,2 , "," , ".")."</strong> equivalem a US$<strong>".number_format($dolar,2 , "," , ".")."</strong> </p>"
        ?>
        </pre>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>