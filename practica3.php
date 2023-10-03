<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Añadir valores a las posicion de cada elemento
    $taulas =  array();
    for ($i=0; $i <= 9; $i++) { 
        $valor = rand(0,5);
        array_push($taulas, $valor);
    }

    ?>

    <ul>
        <?php 
        for ($i=0; $i <= 9; $i++) { 
        if ($taulas[$i]==0) {
            ?> <li><?php echo ("La taula $i esta buida");?></li> <?php
        }
        elseif ($taulas[$i]==5) {
            ?> <li><?php echo ("La taula $i esta plena");?></li> <?php
        }else {
            ?> <li><?php echo ("La taula $i te $taulas[$i] comensals ");?></li> <?php

        }
    }
        ?>
    </ul>
</body>
</html>