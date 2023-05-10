<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h2>conversor de moedas v1.0</h2>
        <?php
            $valor = $_GET["valor"]; 
            $cotacaoFixa = 5.22;

            echo "<p>Seus R$<strong> $valor </strong> equivalem a U$ <strong>" . number_format($valor/$cotacaoFixa,2) . "</strong></p>";
        ?>
    </section>
</body>
</html>