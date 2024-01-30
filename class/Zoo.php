<?php
class Zoo {

    private $name;
    // protected $employee;
    private $maxEnclos=5;
    private $enclos = [];
    private $id;

    public function __construct($zoo) {
        $this->name = $zoo['nom_de_zoo'];
       
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
           $enclo->setHauteur(rand(10,20));
           $enclo->setSalinite(rand(0,30));
           $enclo->setPropretée(rand('mauvaise','correct','bonne'));
        }
     
    }




    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    // /**
    //  * Get the value of employee
    //  */ 
    // public function getEmployee()
    // {
    //     return $this->employee;
    // }

    // /**
    //  * Set the value of employee
    //  *
    //  * @return  self
    //  */ 
    // public function setEmployee($employee)
    // {
    //     $this->employee = $employee;

    //     return $this;
    // }

    /**
     * Get the value of maxEnclos
     */ 
    public function getMaxEnclos()
    {
        return $this->maxEnclos;
    }

    /**
     * Set the value of maxEnclos
     *
     * @return  self
     */ 
    public function setMaxEnclos($maxEnclos)
    {
        $this->maxEnclos = $maxEnclos;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}





?>