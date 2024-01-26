<?php
class Volieres extends Enclos{
   protected $hauteur;
   
   public function getHauteur(){
    return $this->hauteur;
    }

public function setHauteur($hauteur) {
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


    
}

?>