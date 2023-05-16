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
            $valor1 = $_GET["valor1"] ?? 1;
            $peso1 = $_GET["peso1"] ?? 1;
            $valor2 = $_GET["valor2"] ?? 1;
            $peso2 = $_GET["peso2"] ?? 1;
        ?>
        <h1>Média aritmética</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" value="<?=$valor1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" value="<?=$peso1?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" value="<?=$valor2?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Calculo das Médias</h2>
        <?php
            $media1 = $valor1 * $peso1;
            $media2 = $valor2 * $peso2;
            $mediaSimples = ($valor1+$valor2)/2;
            $mediaFinal = ($media1 + $media2)/($peso1+$peso2);
            echo "<p>Analisando os valores $valor1 e $valor2 :</p>";
            echo "<p>
                <ul>    
                    <li>A Média Artimétrica Simples é igual a <strong>".number_format($mediaSimples,2,',','.')."</strong></li>
                    <li>A Média Artimétrica Ponderada com pesos $peso1 e $peso2 é igual a <strong>".number_format($mediaFinal,2,',','.')."</strong></li>
                </ul>
            </p>";
            
            //echO "<p>A media é $mediaFinal</p>";
        ?>
    </section>
</body>
</html>