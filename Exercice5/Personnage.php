<?php
    class Personnage
    {
        private $pseudo;
        private $vie;


        public function __construct($pdo,$id)
        {
            if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "SELECT * FROM personnages WHERE idperso = $id";
               $selectPersonnage= $pdo->query($Requete);

               if($selectPersonnage != false)
               {
                   $row_count = $selectPersonnage->rowCount();
                   if($row_count > 0)
                   {
                         $tabPersonnage = $selectPersonnage->fetch();
                         $this->pseudo = $tabPersonnage["pseudo"];
                         $this->vie = $tabPersonnage["vie"];
                   }
               }
          }           
        }

        public function getInfosPersonnage()
        {
            echo "<p>Votre nom de personnage est ".$this->pseudo." et vous avez ".$this->vie." PV</p>";
        }
    }
?>
<pre>
    class Personnage
    {
        private $pseudo;
        private $vie;


        public function __construct($pdo,$id)
        {
            if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "SELECT * FROM personnages WHERE idperso = $id";
               $selectPersonnage= $pdo->query($Requete);

               if($selectPersonnage != false)
               {
                   $row_count = $selectPersonnage->rowCount();
                   if($row_count > 0)
                   {
                         $tabPersonnage = $selectPersonnage->fetch();
                         $this->pseudo = $tabPersonnage["pseudo"];
                         $this->vie = $tabPersonnage["vie"];
                   }
               }
          }           
        }

        public function getInfosPersonnage()
        {
            echo "<p>Votre nom de personnage est ".$this->pseudo." et vous avez ".$this->vie." PV</p>";
        }
    }
</pre>