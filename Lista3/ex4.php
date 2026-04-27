<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex4 - 3DMD - Alberto Nobre</h1>

    <?php
    $valorCompra = 150.00;

    if ($valorCompra >= 100) 
    {
        $desconto = $valorCompra * 0.10;
        $valorFinal = $valorCompra - $desconto;
    
        echo "Sua compra de R$ {$valorCompra} teve um desconto de 10% (R$ {$desconto}). Valor final: R$ {$valorFinal}";
    } 
    else 
    {
        $valorFinal = $valorCompra;
    
        echo "Compras abaixo de R$ 100 não possuem desconto. Valor final: R$ {$valorFinal}";
    }
    ?>
</body>
</html>