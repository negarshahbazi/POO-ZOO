<?php
class Voliéres extends Enclos{
   protected $hauteur;
   
   public function getHauteur(){
    return $this->hauteur;
    }

public function __construct($name, $hauteur) {
    parent::__construct($name);
    $this->hauteur = $hauteur;
}


public function checkCageTop() {
    // Implementation to check the top of the cage
    if($this->hauteur < 12){
        return "le hauteur n'est pas standard";
    }
}
public function afficherSesCaractéristiques(){
    $car = [];
    $car[] = $this->getHauteur();
    $car[] = $this->getPropreté();
    $car[] = $this->getNom();
    $car[] = $this->getNombre();
return $car;
}
public function afficherSesCaractéristiquesAnimaux(Animaux $animal){
    $carAnimal = [];
      $carAnimal[] = $animal->getPoids();
      $carAnimal[] = $animal->getTaille();
      $carAnimal[] = $animal->getNom();
      $carAnimal[] = $animal->getAge();
      $carAnimal[] = $animal->getIsFaim();
      $carAnimal[] = $animal->getIsDormir();
      $carAnimal[] = $animal->getIsMalad();
return   $carAnimal;
}

    
}

?>