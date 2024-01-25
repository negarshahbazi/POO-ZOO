<?php 
class Terr extends Enclos{
 
public function afficherSesCaractéristiques(){
    $car = [];
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