<?php

    class Character{
        private $health;
        private $rage;

        public function setHealth($valueHealth){
            $this->health = $valueHealth;
        }
        
        public function setRage($valueRage){
            $this->rage = $valueRage;
        }
        
        public function getHealth(){
            return $this->health;
        }
        
        public function getRage(){
            return $this->rage;
        }
    }

    $health = new Character();
    $rage = new Character();
    $health->setHealth('Health');
    $rage->setRage('Rage');
    
    var_dump($health);
    var_dump($rage);
