<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        //capturando os dados do formulario
            $segundos = $_GET["segundos"] ?? 0;
        ?>
        <h1>calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">qual é o total de segundos?</label>
            <input type="number" name="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
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