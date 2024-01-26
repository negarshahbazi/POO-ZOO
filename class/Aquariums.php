<?php 
class Aquariums extends Enclos{
  protected $salinite;

    
    public function setSalinite($salinite) {
        $this->salinite = $salinite;
    }

   public function getSalinite(){
   return $this->salinite;
   }
public function checkWaterSalinity() {
    // Implementation to check water salinity
    if (!(27 < $this->salinite && $this->salinite <= 35)){
        return " le salinité d'eau il faut etre entre 27 et 35";
    }
}
public function afficherSesCaractéristiques(){
    $car = [];
    $car[] = $this->getSalinite();
    $car[] = $this->getPropreté();
    $car[] = $this->getNom();
    $car[] = $this->getNombre();
return $car;
}




}







?>