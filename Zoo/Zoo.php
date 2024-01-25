<?php
class Zoo {

    protected $name;
    protected $employee;
    protected $maxEnclos;
    protected $enclos = [];

    public function __construct($name, Employee $employee, $maxEnclos) {
        $this->name = $name;
        $this->employee = $employee;
        $this->maxEnclos = $maxEnclos;
    }

    public function displayEnclosContents(Enclos $enclos) {
        $enclos[]=$enclos->afficherSesCaractéristiques();
        return  $enclos;
        // Implementation to display the contents of all enclosures
    }

    public function displayAnimalCount(Enclos $enclos) {
        // Implementation to display the total number of animals in the zoo
        return $enclos->getNombre();
    }

   
    public function main() {

        foreach($this->enclos as $enclo) {
            foreach($enclo->getAnimals() as $animal) {
                $animal->setIsMalad(rand(0, 1));
                $animal->setIsFaim(rand(0,1));
                $animal->setIsDormir(rand(0,1));
            }
        }
     
    }



}





?>