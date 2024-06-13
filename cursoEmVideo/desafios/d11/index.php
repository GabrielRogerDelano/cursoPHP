<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        //capturando os dados do formulario
            $preco = $_GET["preco"] ?? 0;
            $porcentagem = $_GET["porcentagem"] ?? 100;
        ?>
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do prouto(R$)?</label>
            <input type="number" name="preco" value="<?=$preco?>">
            <label for="porcentagem">Qual será o reajuste?(<span id="p">?</span>%)</label>
            <input type="range" min="0" max="100" step="0.1" id="porcentagem" name="porcentagem" value="<?=$porcentagem?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php
        $valorAumento = ($preco * $porcentagem)/100;
        $valorFinal = $valorAumento + $preco; 
    ?>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>O valor do aumento é de R$<?=number_format($valorAumento,2,",",".")?> , somado ao preço ficará, R$<?=number_format($valorFinal, 2, ",", ".")?></p>
    </section>
    <script>
        mudaValor()

        function mudaValor (){
            p.innerText = porcentagem.value
        }
    </script>
</body>
</html>