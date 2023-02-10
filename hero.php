<?php

    class Herohéritant{
        private string $weapon;
        private int $weaponDamage;
        private string $shield;
        private int $shieldValue;



        /**Cette méthode permet d'affecter une valeur à la propriété weapon
         * @param mixed $valueWeapon
         * 
         * @return void
         */
        public function setWeapon(int $valueWeapon){
            $this->weapon = $valueWeapon;
        }

        
        /**
         * @return int
         */
        public function getWeapon(){
            return $this->weapon;
        }

        /**Cette méthode permet d'affecter une valeur à la propriété weaponDamage
         * @param mixed $valueWeaponDamage
         * 
         * @return void
         */
        public function setweaponDamage($valueWeaponDamage){
            $this->weapon = $valueWeaponDamage;
        }

        /**
         * @return [type]
         */
        public function getweaponDamage(){
            return $this->weaponDamage;
        }

        /**Cette méthode permet d'affecter une valeur à la propriété shield
         * @param int $valueShield
         * 
         * @return void
         */
        public function setShield(int $valueShield){
            $this->weapon = $valueShield;
        }

        /**
         * @return [type]
         */
        public function getShield(){
            return $this->shield;
        }

        /**Cette méthode permet d'affecter une valeur à la propriété ShieldValue
         * @param mixed $valueShieldValue
         * 
         * @return void
         */
        public function setShieldValue($valueShieldValue){
            $this->weapon = $valueShieldValue;
        }

        /**
         * @return [type]
         */
        public function getShieldValue(){
            return $this->shieldValue;
        }



    }











// Exercice 4
// Dans un nouveau fichier Hero.php, créer la classe Hero héritant de Character et ayant pour
// attributs weapon, weaponDamage, shield et shieldValue.
    // - L'attribut weapon permettra de définir le nom de l'arme équipée,
    // - weaponDamage indiquera les dégâts basiques de l'arme,
    // - shield définira le nom de l'armure équipée,
    // - shieldValue indiquera le nombre de dégâts que l'armure encaisse à la place du héros.
    // Les attributs ne doivent être accessibles que dans cette classe !
    

// Exercice 5
 // Créer les méthodes permettant d’accéder aux attributs de la classe Hero et permettant également
// de les définir.
// Exercice 6
// Créer la méthode magique construct de la classe Hero.
// Cette méthode devra permettre le déclenchement de la méthode construct de la classe mère
// (Character) et devra également permettre de défnir les valeurs de weapon, weaponDamage,
// shield et shieldValue.
// Pour finir, cette méthode doit retourner une phrase contenant toutes les informations sur le Héros
// nouvellement créé.