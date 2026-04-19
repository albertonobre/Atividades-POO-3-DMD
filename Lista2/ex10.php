<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex10 - 3DMD - Alberto Nobre</h1>

    <?php
    $numeros = [10, 20, 30, 40];
    $somaTotal = 0;

    foreach ($numeros as $valor) 
    {
        $somaTotal = $somaTotal + $valor;
    }

    echo "A soma total é: {$somaTotal}";
    ?>

</body>
</html>