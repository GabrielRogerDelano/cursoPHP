<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        //capturando os dados do formulario
            $anoNasc = $_GET["anoNasc"] ?? 2000;
            $anoAtual = $_GET["anoAtual"] ?? 2023;
        ?>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" value="<?=$anoNasc?>">
            <label for="peso1">Quer saber sua idade em que ano?(atualmente estamos em 2023)</label>
            <input type="number" name="anoAtual" value="<?=$anoAtual?>">
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