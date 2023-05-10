<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h2>Resultado final</h2>
        <p>
        <?php 
            $num = $_GET["num"];
            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>Seu antecessor é <strong>".($num - 1)."</strong></p>" ;
            echo "<p>Seu sucessor é <strong>".($num + 1)."</strong></p>" ;
        ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar para pagina anterior</button>
    </main>
</body>
</html>