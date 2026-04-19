<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ex9 - 3DMD - Alberto Nobre</h1>

    <?php

    $capitalInicial = 1000.00;
    $taxaJuros = 0.05;
    $tempo = 12;

    $juroGerado = $capitalInicial * $taxaJuros * $tempo;

    echo "O valor do juro gerado é R$ {$juroGerado}";
    ?>
</body>
</html>