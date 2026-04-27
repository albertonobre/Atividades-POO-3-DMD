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
    $nota = 8.5;

    if ($nota >= 8) 
    {
        $classificacao = "Excelente";
    } 
    elseif ($nota >= 6) 
    {
        $classificacao = "Bom";
    } 
    else 
    {
        $classificacao = "Reprovado";
    }

    echo "O aluno tirou {$nota} . Classificação: {$classificacao}";
    ?>
</body>
</html>