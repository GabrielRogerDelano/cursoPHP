<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d12</title>
    <link rel="stylesheet" href="style.css">
    <style>    
        img.nota{
            height: 50px;
            margin: 10px;
        }   
    </style>
</head>
<body>
    <main>
        <?php 
        //capturando os dados do formulario
            $reais = $_GET["reais"] ?? 0;
        ?>
        <h2>Caixar Bancário</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="reias">Quanto você quer sacar?</label>
            <input type="number" name="reais" value="reais">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
        //notas de 100  
        $nota100 = (int) ($reais /100) ;
        $resto = $reais % 100;

        //notas de 50
        $nota50 = (int) ($resto /50);
        $resto = $reais % 50;

        //notas de 20
        $nota20 = (int) ($resto /20);
        $resto = $reais % 20;

        //notas de 10
        $nota10 = (int) ($resto /10);
        $resto = $reais % 10;

        //notas de 5
        $nota5 = (int) ($resto /5);
        $resto = $reais % 5;


    ?>
    <section id="resultado">
        <h2>Totalizadno tudo</h2>
        <p>Analisando a o valor que digitou(<?= $reais?>), equivale a </p>
        <ul>
            <li><img src="img/100-reais.jpg" class="nota" alt="100 reais"> X<?= $nota100?> </li>
            <li><img src="img/50-reais.jpg" class="nota" alt="100 reais"> X<?= $nota50?> </li>
            <li><img src="img/20-reais.jpg" class="nota" alt="100 reais"> X<?= $nota20?> </li>
            <li><img src="img/10-reais.jpg" class="nota" alt="100 reais"> X<?= $nota10?> </li>
            <li><img src="img/5-reais.jpg" class="nota" alt="100 reais"> X<?= $nota5?> </li>
            <li>Sobra <?= $resto?> </li>

        </ul>
    </section>
</body>
</html>