<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index4</title>
    </head>
        <a href="../index.html">Index</a>
    <body>
        <?php
            include("Personnage.php");
            $personnage1= new Personnage("Jordan",999);
            $personnage2 = new Personnage("Quentin",999);
            $personnage1->getInfosPersonnage();
            $personnage2->getInfosPersonnage();
            $personnage1->setAttaque(100,$personnage2);
            $personnage2->setAttaque(50,$personnage1);
        ?>
        <pre>
            $personnage1= new Personnage("Jordan",999);
            $personnage2 = new Personnage("Quentin",999);
            $personnage1->getInfosPersonnage();
            $personnage2->getInfosPersonnage();
            $personnage1->setAttaque(100,$personnage2);
            $personnage2->setAttaque(50,$personnage1);
        </pre>
    </body>
</html>