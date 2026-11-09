<?php
//Exécuteur du jeu

//importer mes ressources
include './Characters/AbstractCharacter.php';
include './Interfaces/Weapon.php';
include './Characters/Warrior.php';
include './Characters/Thief.php';
include './Weapons/Sword.php';
include './Weapons/Bow.php';

//Instancier deux guerriers 
$guts = new Warrior(20, "Guts", 100, new Sword(30));
$griffith = new Warrior(70, "Griffith", 50, new Sword(20));
$garrett = new Thief(80, "Garrett", 800, new Bow(15));

//Faire que $guts attaque $griffith
// $guts->attack($griffith);

while ($garrett->getHealth()>0 && $guts->getHealth()>0){
    $garrett->attack($guts);
    if ($guts->getHealth()>0){
        $guts->attack($garrett);
    }
}