<?php 
class Terr extends Enclos{
 
public function afficherSesCaractéristiques(){
    $car = [];
    $car[] = $this->getPropreté();
    $car[] = $this->getNom();
    $car[] = $this->getNombre();
return $car;
}
public function addAnimal(Animaux $animal)
{

    if($animal instanceof Tigres || $animal instanceof Ours){
    if ($this->nombre < 6) {
        $this->animals[] = $animal;
        // $this->nombre = count($this->animals);
        $this->nombre++;
        return  true;

    }  else {
                echo "Cannot add the animal to this enclos because there is 6 animals already.";
            }
        
    } else {
            echo "This animal, is not a ground animal";
        
}
}
public function entretenirSiEstVide()
{
    if ($this->nombre === 0) {
        $this->setPropreté('bonne');
    }
    return $this->getPropreté();
}

}