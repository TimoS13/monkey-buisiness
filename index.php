<?php


$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";

//Opdracht 2
?>
<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Monkey Buisiness</title>
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: Arial;
                text-align: center;
            }
            p{
                font-family: 'Bangers', cursive;
                color: #ff8400;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
    <img src="images/monkey-business.jpg" alt="monkey buisiness">
    <h1>Select your monkey!</h1>
    <img src="images/monkey_swings.png" alt="monkey swings">
    <?php foreach ($apen as $aap) {?>
        <p><? echo  $aap; ?></p>

    <?php }?>
    </body>
    </html>