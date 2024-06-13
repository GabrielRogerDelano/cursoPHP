<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "gabriel";
        $snome = "roger";
        $apelido = "*";

        echo "$nome \"$apelido\"$snome";

        //heredoc
        $canal = "Curso em video";
        $ano = date('Y');
        echo <<< TESTE
            Óla galera do $canal!
                    Tudo bem com voces?
                Como esta sendo esse ano de $ano
            Abraços! \u{1F596}<br>
        TESTE;

        //nowdoc
        $canal = "Curso em video";
        $ano = date('Y');
        echo <<< 'TESTE'
            Óla galera do $canal!
                    Tudo bem com voces?
                Como esta sendo esse ano de $ano
            Abraços! \u{1F596}
        TESTE;
    ?>
</body>
</html>