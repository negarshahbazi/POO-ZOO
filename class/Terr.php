<?php 
class Terr extends Enclos{
 
public function afficherSesCaractéristiques(){
    $car = [];
    $car[] = $this->getPropreté();
    $car[] = $this->getNom();
    $car[] = $this->getNombre();
return $car;
}

}