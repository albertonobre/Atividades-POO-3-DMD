<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex4 - 3DMD - Alberto Nobre</h1>

    <?php
    $valorOriginal = 250.00;
    $percentualDesconto = 15; // Representa 15%

    $valorDoDesconto = $valorOriginal * ($percentualDesconto / 100);

    $valorFinal = $valorOriginal - $valorDoDesconto;

    echo "O produto custava R$ {$valorOriginal} e agora custa R$ {$valorFinal}";
    ?>

</body>
</html>