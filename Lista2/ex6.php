<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex6 - 3DMD - Alberto Nobre</h1>

    <?php
    $nomes = array("Ana", "Carlos", "João");

    $posicao = 0;

    foreach ($nomes as $nome) 
    {
    $posicao++;

    echo "Nome {$posicao}: {$nome}<br>";
    }

    ?>
</body>
</html>