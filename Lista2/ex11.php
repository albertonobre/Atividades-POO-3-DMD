<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ex11 - 3DMD - Alberto Nobre</h1>
    
    <?php
    
    $numeros = [5, 8, 2, 15, 3];

    $maiorNumero = $numeros[0];
    foreach ($numeros as $numero) 
    {
        if ($numero > $maiorNumero) 
        {
            $maiorNumero = $numero;
        }
    }
    echo "O maior número é: {$maiorNumero}";

    ?>

</body>
</html>