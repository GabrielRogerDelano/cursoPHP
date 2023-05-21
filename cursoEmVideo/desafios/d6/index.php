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
            $dividendo = $_GET["Dividendo"] ?? 1;
            $divisor = $_GET["Divisor"] ?? 1;
        ?>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="Dividendo" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="Divisor" value="<?=$divisor?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisao</h2>
        <?php
            $quociente = (int) $dividendo/$divisor;
            $resto = $dividendo%$quociente;
        ?>
        <table class    ="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>