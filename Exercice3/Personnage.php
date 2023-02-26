<?php
    class Personnage
    {
        private $pseudo;
        private $vie;


        public function __construct($pseudo)
        {

            $this->vie=100;
            $this->pseudo=$pseudo;
        }

        public function getInfosPersonnage()
        {
            echo "Votre nom de personnage est ".$this->pseudo." et vous avez ".$this->vie." PV";
        }
    }
?>
<pre>
    class Personnage
    {
        private $pseudo;
        private $vie;


        public function __construct($pseudo)
        {

            $this->vie=100;
            $this->pseudo=$pseudo;
        }
        
        public function getInfosPersonnage()
        {
            echo "Votre nom de personnage est ".$this->pseudo." et vous avez ".$this->vie." PV";
        }
    }
</pre>