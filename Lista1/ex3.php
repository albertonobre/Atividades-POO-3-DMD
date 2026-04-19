<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex3 - 3DMD - Alberto Nobre</h1>

    <?php
    $nota1 = 8.0;
    $nota2 = 6.0;
    $nota3 = 9.0;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    $media = number_format ($media , 1);

    echo "A media final do aluno: {$media}";

    ?>

</body>
</html>