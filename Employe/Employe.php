<?php

abstract class Employee extends Enclos{
    protected string $name;
    protected int $age;
    protected string $sexe;

    public function __construct($name, $age, $sexe) {
        $this->name = $name;
        $this->age = $age;
        $this->sexe = $sexe;
    }
    //////// GETTER & SETTER ////////
    public function setName($name) {
        return $this->name=$name;
    }
    public function getName() {
        return $this->name;
    }

    
    public function setAge($age) {
        return $this->age=$age;
    }
    public function getAge() {
        return $this->age;
    }

  
    public function setSexe($sexe) {
        return $this->sexe=$sexe;
    }
    public function getSexe() {
        return $this->sexe;
    }

  


    //////// METHODS ////////
public function examiner(Enclos $enclos,Animaux $animal){
    $table=[];
    $table=$this->afficherSesCaractéristiques();
    $table=$this->afficherSesCaractéristiquesAnimaux($animal);
    return $table;
}
   public function feedAnimal(Animaux $animal) {
    if($animal->getIsDormir()===false){
       return $animal->manger();
    }
    }

    public function transferAnimal(Animaux $animal, Enclos $enclos)
    {
        $this->removeAnimalFromEnclos($animal,$enclos);
        $this->addAnimalToEnclos($animal,$enclos);
        // Implémentez la logique pour transférer un animal d'un enclos à un autre
    }
    public function removeAnimalFromEnclos(Animaux $animal, Enclos $enclos) {
        // Implementation to remove an animal from the enclosure
       $this->removeAnimal($animal);
    }
 public function addAnimalToEnclos(Animaux $animal, Enclos $enclos) {
        // Implementation to add an animal to the enclosure
        $this->addAnimal($animal);
    }
    public function cleanEnclos(Enclos $enclos)
    {if($enclos->getPropreté()==="mauvaise"||$enclos->getNombre()===0){

      return  $enclos ->setPropreté('bonne');


    }
      
    }
   
   
}