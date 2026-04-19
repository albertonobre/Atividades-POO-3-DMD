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

    $nomeCliente = "João";
    $valorProduto = 1200.00;
    $percentualDesconto = 10;

    $valorDesconto = $valorProduto * ($percentualDesconto / 100);

    $valorFinal = $valorProduto - $valorDesconto;

    echo "O cliente {$nomeCliente} comprou um produto de R$ {$valorProduto}, recebeu R$ {$valorDesconto} de desconto e pagará R$ {$valorFinal}";
    ?>
</body>
</html>