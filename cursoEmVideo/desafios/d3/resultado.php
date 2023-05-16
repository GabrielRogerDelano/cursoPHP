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
        <?php
            $valor = $_GET["valor"] ?? 0; 
            $cotacaoFixa = 5.22;



            //tem que ativar o insternallization do php
            //$padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY);
            //echo "<p>Seus <strong> ". numfmt_format_currency($padrao, $real, "BRL")." </strong> equivalem a U$ <strong>" . number_format($valor/$cotacaoFixa,2) . "</strong></p>";
            
            echo "<p>Seus <strong>  ". number_format($valor, 2 , "," , "." )." </strong> equivalem a U$ <strong>" . number_format($valor/$cotacaoFixa,2 , "," , ".") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>