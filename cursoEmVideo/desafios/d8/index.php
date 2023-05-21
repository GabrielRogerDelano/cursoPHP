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
            $raiz = $_GET["raiz"] ?? 0;
        ?>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="raiz">Número</label>
            <input type="number" name="raiz" value="<?=$raiz?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>resultado Final</h2>
        <?php
            $raizQuadrada = sqrt($raiz);
            $raizCubica = pow($raiz, 1/3);
            echO "<p>Analisando o <strong>número $raiz</strong>, temos :<br> 
            <ul>
                <li>A sua raiz quadrada é <strong>".number_format($raizQuadrada,3)."</strong></li>
                <li>A sua raiz quadrada é <strong>".number_format($raizCubica,3)."</strong></li>
            </ul>
            </p>";
        ?>
    </section>
</body>
</html>