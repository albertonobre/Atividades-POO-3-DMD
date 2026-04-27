<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex14 - 3DMD - Alberto Nobre</h1>

    <?php
    $salarioBase = 3000.00;
    $anosEmpresa = 6;
    $atingiuMeta = true;

    $percentualBonus = 0;

    if ($anosEmpresa >= 5 && $atingiuMeta == true) 
    {
        $percentualBonus = 20;
    } 
    elseif ($anosEmpresa >= 2 && $atingiuMeta == true) 
    {
        $percentualBonus = 10;
    } 
    else 
    {
        $percentualBonus = 0;
    }

    $valorBonus = ($salarioBase * $percentualBonus) / 100;
    $salarioFinal = $salarioBase + $valorBonus;

    echo "O funcionário tem {$anosEmpresa} anos de casa. Bônus aplicado: {$percentualBonus}% (R$ {$valorBonus}). O salário final é R$ {$salarioFinal}";

    ?>

</body>
</html>