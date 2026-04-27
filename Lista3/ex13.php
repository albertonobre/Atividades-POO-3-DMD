<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex13 - 3DMD - Alberto Nobre</h1>

    <?php
    $idade = 20;
    $nivel = 2;
    $bloqueado = false;
    $codigoSeguranca = ($nivel * 100) + $idade;

    if ($bloqueado == true) 
    {
        echo "Acesso negado";
    } 
    elseif ($nivel == 3) 
    {
        echo "Acesso total";
    } 
    elseif ($nivel == 2 && $idade >= 18) 
    {
        echo "Acesso parcial";
    }
    else 
    {
        echo "Acesso limitado";
    }
    ?>

</body>
</html>