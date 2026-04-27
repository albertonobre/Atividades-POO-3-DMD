<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex12 - 3DMD - Alberto Nobre</h1>

    <?php
    $valorCompra = 150.00;
    $clienteVIP = true;
    $percentual = 0;

    if ($valorCompra >= 200 || $clienteVIP == true) 
    {
        $percentual = 15;
    } 
    elseif ($valorCompra >= 100) 
    {
        $percentual = 10;
    } 
    else 
    {
        $percentual = 0;
    }

    $valorDesconto = ($valorCompra * $percentual) / 100;
    $valorFinal = $valorCompra - $valorDesconto;

    echo "Sua compra de R$ {$valorCompra} teve um desconto de {$percentual}% (R$ {$valorDesconto}). Valor final: R$ {$valorFinal}";
    
    ?>
</body>
</html>