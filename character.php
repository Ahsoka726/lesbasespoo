<?php

    class Character{
        private int $health;
        private int $rage;

        public function __construct($valueHealth, $valueRage ) {
            $this->health = $valueHealth;
            $this->rage = $valueRage;
        }

        /**Cette méthode permet d'affecter une valeur à la propriété health
         * @param int $valueHealth
         * 
         * @return void
         */
        public function setHealth(int $valueHealth){
            $this->health = $valueHealth;
        }

        /**
         * @return int
         */
        public function getHealth():int{
            return $this->health;
        }
        
        /**Cette méthode permet d'affecter une valeur à la propriété rage
         * @param mixed $valueRage
         * 
         * @return void
         */
        public function setRage($valueRage){
            $this->rage = $valueRage;
        }

        /**
         * @return [type]
         */
        public function getRage(){
            return $this->rage;
        }
    }


// Infos
// Vous allez créer votre propre script de combat entre un Orc et un Héros en PHP !
// Le principe est simple : l'Orc attaque le Héros de façon répétée et fait augmenter la valeur de rage
// de celui-ci.
// Lorsque la valeur de rage du Héros atteint un certain seuil, il peut alors se défendre !


// Exercice 1
// Créer un fichier Character.php, dans ce fichier créer une classe Character ayant pour attributs
// health et rage.
// Les attributs ne doivent être accessibles que dans cette classe !


// Exercice 2
// Créer les méthodes permettant d’accéder aux attributs de la classe Character et permettant
// également de les définir.


// Exercice 3
// Créer la méthode magique construct de la classe Character.
// Celle-ci doit permettre la création d'un nouveau personnage et doit donc définir les valeurs de
// health et de rage.
