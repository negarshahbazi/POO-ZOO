<?php

 class Employee{
    private $idEmployee;
  private string $nameEmployee;
  private int $age;
  private string $sexe;

    public function __construct($employee) {
        $this->nameEmployee = $employee['nom'];
        $this->age = $employee['age'];
        $this->sexe = $employee['sexe'];
    }
    //////// GETTER & SETTER ////////
    public function setNameEmployee($name) {
        return $this->nameEmployee=$name;
    }
    public function getNameEmployee() {
        return $this->nameEmployee;
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
    $table=$enclos->afficherSesCaractéristiques();
    $table=$enclos->afficherSesCaractéristiquesAnimaux($animal);
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
       $enclos->removeAnimal($animal);
    }
 public function addAnimalToEnclos(Animaux $animal, Enclos $enclos) {
        // Implementation to add an animal to the enclosure
        $enclos->addAnimal($animal);
    }
    public function cleanEnclos(Enclos $enclos)
    {if($enclos->getPropreté()==="mauvaise"|| $enclos->getPropreté()==="correcte" || $enclos->getNombre()===0){

      return  $enclos ->setPropreté('bonne');


    }
      
    }
   
   

    /**
     * Get the value of idEmployee
     */ 
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set the value of idEmployee
     *
     * @return  self
     */ 
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }
}