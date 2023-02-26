<?php
    class Personnage
    {
        private $pseudo;
        private $vie;


        public function __construct($pseudo,$vie)
        {

            $this->vie=$vie;
            $this->pseudo=$pseudo;
        }

        public function getInfosPersonnage()
        {
            echo "<p>Votre nom de personnage est ".$this->pseudo." et vous avez ".$this->vie." PV</p>";
        }

        public function getVie()
        {
            return $this->vie;
        }

        public function getPseudo()
        {
            return $this->pseudo;
        }

        public function setAttaque($degats,$personnage)
        {
            $personnage->setDefense($degats);
            echo "<p>Et PAF ".$this->getPseudo()." attaque ".$personnage->getPseudo()." ! il reste ".$personnage->getVie()." PV à ".$personnage->getPseudo()." !</p>";
        }
        public function setDefense($degats)
        {
            $this->vie -= $degats;
        }
    }
?>
<pre>
    class Personnage
    {
        private $pseudo;
        private $vie;


        public function __construct($pseudo,$vie)
        {

            $this->vie=$vie;
            $this->pseudo=$pseudo;
        }

        public function getInfosPersonnage()
        {
            echo "<p>Votre nom de personnage est ".$this->pseudo." et vous avez ".$this->vie." PV</p>";
        }

        public function getVie()
        {
            return $this->vie;
        }

        public function getPseudo()
        {
            return $this->pseudo;
        }

        public function setAttaque($degats,$personnage)
        {
            $personnage->setDefense($degats);
            echo "<p>Et PAF ".$this->getPseudo()." attaque ".$personnage->getPseudo()." ! il reste ".$personnage->getVie()." PV à ".$personnage->getPseudo()." !</p>";
        }
        public function setDefense($degats)
        {
            $this->vie -= $degats;
        }
    }
</pre>
