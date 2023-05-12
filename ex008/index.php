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
            $valor1 = $_GET["v1"] ?? 0;
            $valor2 = $_GET["v2"] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" value="<?=$valor2?>">
            <input type="submit" value="somar">
        </form>
    </main>
    <section id="resultado">
        <h2>resultado de soma</h2>
        <?php 
            echo "<p>A soma dos valores $valor1 e $valor2 é ".$valor1 + $valor2." </p>"
        ?>
    </section>
</body>
</html>