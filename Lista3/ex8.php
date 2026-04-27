<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex8 - 3DMD - Alberto Nobre</h1>

    <?php
    $valorCompra = 150.00;
    $valorMinimoFrete = 200.00;

    if ($valorCompra >= $valorMinimoFrete) 
    {
        echo "Frete grátis";
    } 
    else 
    {
        echo "Frete pago";
    }
    ?>

</body>
</html>