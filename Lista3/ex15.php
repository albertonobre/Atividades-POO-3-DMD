<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ex15 - 3DMD - Alberto Nobre</h1>

    <?php
    $temperatura = 22;

    
    if ($temperatura < 15) 
    {
        $status = "Frio";
    } 
    elseif ($temperatura >= 15 && $temperatura <= 25) 
    {
        $status = "Agradável";
    } 
    elseif ($temperatura > 25 && $temperatura <= 35) 
    {
        $status = "Quente";
    } 
    else 
    {
        $status = "Muito quente";
    }

    echo "O clima está: {$status}";
    ?>

</body>
</html>