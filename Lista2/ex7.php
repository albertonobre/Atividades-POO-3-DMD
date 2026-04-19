<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex7 - 3DMD - Alberto Nobre</h1>

    <?php

    $notas = [8, 5, 7, 4, 9];

    $totalAprovados = 0;

    foreach ($notas as $nota) 
    {
        if ($nota >= 6) 
        {
        $totalAprovados++;
        }
    }
    
    echo "Total de aprovados: {$totalAprovados}";

    ?>

</body>
</html>