<!DOCTYPE html>
<html lang="pt-br">
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
            $num = $_GET["n"] ?? 0 ;

            
            echo "<p>Analisando o numeor real <strong>$num</strong> informado pelo usuário :</p>";

            $int = (int)$num;
            $frac = $num - $int ;

            echo "    
            <ul>
                <li>A parte inteira do número é <strong>".number_format($int,0 , "," , ".")."</strong></li>
                <li>A parte fracionada do número é <strong>".number_format($frac,3 , "," , ".")."</strong> </li>
            </ul>
            ";
        ?>
        
        <button onclick="javascript:history.go(-1)">Voltar para pagina anterior</button>
    </section>
</body>
</html>