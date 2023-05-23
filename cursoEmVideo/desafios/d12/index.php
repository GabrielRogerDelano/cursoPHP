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
            $segundos = $_GET["segundos"] ?? 1;
        ?>
        <h2>calculadora de tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">qual é o total de segundos?</label>
            <input type="number" name="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizadno tudo</h2>
        <?php
            $semanas = (int)($segundos/604800);
            $restoSegundosSemanais = $segundos-($semanas*604800);
            $a = $segundos % $semanas;
            /*
            
            
            */
            echO "<p>Analisandos o número que você digitou, <strong>".$segundos." segundos </strong> equivalem a um total de :</p>";
        ?>
        <ul>
            <li>segundos original<?= $segundos?></li>
            <li>SEMANAS<?= $semanas?></li>
            <li>resto de segundos<?= $restoSegundosSemanais?></li>
            <li>a<?= $a?></li>
        </ul>
    </section>
</body>
</html>