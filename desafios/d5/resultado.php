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
        <h2>Analisador de númeor real</h2>
        <?php
            $valor = $_GET["valor"];
            echo "<p>Analisando o numeor real <strong>$valor</strong> informado pelo usuário :</p>";
            echo "    
            <ul>
                <li>A parte inteira do número é <strong>".number_format($valor,0)."</strong></li>
                <li>A parte fracionada do número é <strong>".number_format(".",",",$valor)."</strong> </li>
            </ul>
            ";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </section>
</body>
</html>