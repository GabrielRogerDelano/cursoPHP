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
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'05-05-2023\'&@dataFinalCotacao=\'05-12-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            var_dump($dados);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            echo "<p> o valor do dolar hoje é $cotacao</p>"
        ?>
        </pre>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>