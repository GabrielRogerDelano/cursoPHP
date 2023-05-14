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
            <label for="porcentagem">Qual será o resjuste?(<?=$porcentagem?>)</label>
            <input type="range" min="0" max="100" step="1" name="porcentagem" value="<?=$porcentagem?>">
            <input type="submit" value="Qual sera a minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            $idade = $anoAtual-$anoNasc;
            echO "<p>Você tem/tera $idade em $anoAtual</p>";
        ?>
    </section>
</body>
</html>