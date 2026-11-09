<?php
//implements : définit l'implémentation d'une interface
class Bow implements Weapon {
    //ATTRIBUT
    private int $damage;

    //CONSTRUCTEUR
    public function __construct(int $newDamage){
        $this->damage = $newDamage;
    }

    //GETTER ET SETTER
    /**
         * Get the value of damage
         *
         * @return int
         */
        public function getDamage(): int {
            return $this->damage;
        }

        /**
         * Set the value of damage
         *
         * @param int $damage
         *
         * @return self
         */
        public function setDamage(int $damage): self {
            $this->damage = $damage;
            return $this;
        }
    //METHOD
    public function hit():int{
        //1. Affichage du message
        echo("Une flèche en plein coeur");

        //2. Retourner les dégâts
        return $this->damage;
    }

    
}