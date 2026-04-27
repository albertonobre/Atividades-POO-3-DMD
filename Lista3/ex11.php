<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex11 - 3DMD - Alberto Nobre</h1>

    <?php
    $nota = 7.0;
    $frequencia = 70; 
    
    if ($nota >= 6 && $frequencia >= 75) 
    {
        echo "O aluno está aprovado";
    } 
    elseif ($nota >= 6 && $frequencia < 75) 
    {
        echo "O aluno está reprovado por falta";
    } 
    else 
    {
        echo "O aluno está reprovado por nota";
    }
    ?>

</body>
</html>