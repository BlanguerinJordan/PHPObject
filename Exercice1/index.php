<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice1</title>
    </head>
    <header>
        <a href="../index.html">Index</a> 
    </header>
    <body>
        <?php
            include("User.php");
            $User1 = new User();
            $User1 -> AfficherUser();
            echo " ";
            $User2 = new User();
            $User2 -> AfficherUser();
        ?>
        <pre>
            $User1 = new User();
            $User1 -> AfficherUser();
            echo " ";
            $User2 = new User();
            $User2 -> AfficherUser();
        </pre>
        <table style="width: 15%;" border="1">
            <tr>
                <th style="text-align: center;">User</th>
            </tr>

            <tr>
                <td>
                    <p>
                        -Nom : String<br>
                        -Prenom : String
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p>+AfficheUser() : void</p>
                </td>
            </tr>
        </table>
    </body>
</html>