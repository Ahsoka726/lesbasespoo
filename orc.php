<?php
    
    require_once(__DIR__.'/character.php');

    class Orc extends Character{
        private int $damage;

        public function setDamage(int $damageValue){
            $this->damage = $damageValue;
        }

        public function getDamage(){
            $this->damage;
        }

        public function __construct($valueHealth, $valueRage){
            parent::__construct($valueHealth, $valueRage);
        }
        
        public function __toString(){
            return 'L\'orc a pour santé '. $this->getHealth() . 'pv , sa rage est de '. $this->getRage() .' ';
            // ' et ses dégats de '. $this->damage() .' .';
        }

        public function attack(){
            $this->setDamage(rand (600,800));
            return $this->getDamage();
        }
    }

    $joueur2 = new Orc(100, 50);
    var_dump($joueur2);
    echo $joueur2;

























// Exercice 9
// Dans un nouveau fichier Orc.php, créer la classe Orc héritant de Character et ayant pour attribut
// damage.
// Cet attribut ne doit être accessible que dans cette classe !


// Exercice 10
// Créer les méthodes permettant d’accéder aux attributs de la classe Orc et permettant également de
// les définir.