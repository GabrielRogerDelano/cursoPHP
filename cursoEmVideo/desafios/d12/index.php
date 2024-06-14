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
    <?php
        //total de semanas
        $semanas = (int)($segundos/604800);
        $sobra = ($segundos % 604800);

        //total de dias
        $dias = (int) ($sobra / 86400);
        $sobra = ($segundos % 86400);

        //total de horas
        $horas= (int) ($sobra / 3600);
        $sobra = ($segundos % 3600);

        //total de minutos
        $minutos = (int) ($sobra / 60);
        $sobra = ($segundos % 60);

    ?>
    <section id="resultado">
        <h2>Totalizadno tudo</h2>
        <p>Analisando a o valor que digitou(<?= $segundos?>s), equivale a </p>
        <ul>
            <li><?= $semanas?> semanas</li>
            <li><?= $dias?> dias</li>
            <li><?= $horas?> horas</li>
            <li><?= $minutos?> minutos e</li>
            <li><?= $sobra?> segundos</li>
        </ul>
    </section>
</body>
</html>