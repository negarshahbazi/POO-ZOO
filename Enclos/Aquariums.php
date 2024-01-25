<?php 
class Aquariums extends Enclos{
  protected $salinité;

    public function __construct($name, $salinité) {
        parent::__construct($name);
        $this->salinité = $salinité;
    }
   public function getSalinité(){
   return $this->salinité;
   }
public function checkWaterSalinity() {
    // Implementation to check water salinity
    if (!(27 < $this->salinité && $this->salinité <= 35)){
        return " le salinité d'eau il faut etre entre 27 et 35";
    }
}
public function afficherSesCaractéristiques(){
    $car = [];
    $car[] = $this->getSalinité();
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