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
    $idade = 16;
    $acompanhado = true;
    $pesoAcesso = $idade + ($acompanhado * 2);

    if ($idade >= 18 || $acompanhado == true) 
    {
        echo "Entrada permitida";
    } 
    else 
    {
        echo "Entrada negada";
    }
    ?>

</body>
</html>