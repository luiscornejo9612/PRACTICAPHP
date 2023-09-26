<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nom = 'Kurt';
        $cognom = 'Cagle';
        $edat = 40;
        $dataDeNaixement = date_create();
        date_date_set($dataDeNaixement, 1983, 05, 12);
        $telefono = array (654332211, 933332211);
        $adrecaPostal = 'Carrer de turin, 15';
        $adrecaElectronica = 'kurt.cagle@example.com';
        $treballa = true;
        $alcada = 1.67;
    
    ?>

    <h1>Descrivint <?php
        echo $nom.' '.$cognom;

    ?></h1>

    <h2>Les dades de Kurt Cagle son:</h2>

    <div>
        
        <ul>
            <li><?php echo 'Es diu '. $nom;?></li>    
            <li><?php echo 'Te '.$edat. 'anys';?></li>
            <li><?php echo 'Va neixer l any '?> <b> <?php echo date_format($dataDeNaixement, 'Y-m-d');?></b> </li> 
            <li><?php echo 'El seu telefons son '. $telefono[0].' - '.$telefono[1];?></li>
            <li><?php echo 'Viu a: '. $adrecaPostal;?></li>
            <li><?php echo 'Es seu email es: '. $adrecaElectronica;?></li>
            <li><?php echo 'Treballa '. $treballa;?></li>
            <li><?php echo 'I medeix '. $alcada;?></li>
        </ul>
        
    </div>

</body>
</html>