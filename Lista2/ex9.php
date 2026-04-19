<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex9 - 3DMD - Alberto Nobre</h1>

    <?php

    $cont = 1;
    $soma = 0;

    while ($cont <= 10) 
    {
        if ($cont % 2 == 0) 
        {
            $soma = $soma + $cont;
        }

    $cont++;
    }

    echo "Soma dos pares: {$soma}";

    ?>


</body>
</html>