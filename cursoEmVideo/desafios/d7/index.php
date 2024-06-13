<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularioretroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        //capturando os dados do formulario
            $salario = $_GET["salario"] ?? 0;
            $salarioMin = 1380;
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" value="<?=$salario?>">
            <p>Considerando o salário minimo de <strong>R$<?php echo number_format($salarioMin, 2, ',','.');?></strong></p>
            <input type="submit" value="calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>resultado Final</h2>
        <?php
            $quantidadeDeSalarios = (int) ($salario/$salarioMin);
            $resto = ($salario-($salarioMin*$quantidadeDeSalarios));

            //teste
            /*echO "<p>
            salario = $salario<br>
            salario minimo = $salarioMin<br>
            quantidade de salarios  =  $quantidadeDeSalarios<br>
            resto = $resto<br>
            min * quantidade = ".$salarioMin*$quantidadeDeSalarios."<br>
            </p>";*/
            
            echO "<p>Quem recebe um salario de R\$".number_format($salario,2, ',','.')." ganha <strong>$quantidadeDeSalarios salários minimos + R\$".number_format($resto,2, ',','.')."</strong></p>";
        ?>
    </section>
</body>
</html>