<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index5</title>
    </head>
    <header>
        <a href="../index.html">Index</a>
    </header>
    <body>
        <?php
            include_once("../utils.php");
            include("Personnage.php");
            $personnage1= new Personnage($GLOBALS["pdo"],1);
            $personnage2= new Personnage($GLOBALS["pdo"],2);
            $personnage1->getInfosPersonnage();
            $personnage2->getInfosPersonnage();
        ?>
        <pre>
            $personnage1= new Personnage($GLOBALS["pdo"],1);
            $personnage2= new Personnage($GLOBALS["pdo"],2);
            $personnage1->getInfosPersonnage();
            $personnage2->getInfosPersonnage();
        </pre>
    </body>
</html>