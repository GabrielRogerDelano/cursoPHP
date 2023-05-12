<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h2>Trabalhando com números aleatórios</h2>
        <p>Gerando número aleatório entre 0 e 100 ...</p>
        <?php
            $min = 0;
            $max = 100;

            echo "O número gerado foi <strong>" . mt_rand($min, $max) . "</strong>"; 
            //randow_int = gera numeors aettorios criptograficamente seguros
        ?>
        <input type="submit" onclick="javascript:document.location.reload()" value="Gerar outro" >
    </section>
</body>
</html>