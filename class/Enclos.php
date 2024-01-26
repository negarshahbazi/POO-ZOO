<?php
abstract class Enclos
{protected $id;
    protected $nom;
    protected $propreté;
    // pouvant prendre comme valeur : mauvaise, correcte, bonne
    protected $nombre = 0;
    protected $animals = [];

    public function __construct($data)
    {
        $this->nom = $data['type'];
        $this->propreté = $data['propreté'];
    }
    // method
    public function addAnimal(Animaux $animal)
    {
        if ($this->nombre < 6) {
            $this->animals[] = $animal;
            $this->nombre++;
        } else {
            echo "Cannot add the animal to this enclos.";
        }
    }
    public function removeAnimal(Animaux $animal)
    {
        if($this->nombre>=1){
            $this->nombre--; 
        }else {
            echo "c'est vide";
        }
       
    }

    public function entretenirSiEstVide()
    {
        if ($this->nombre === 0) {
            $this->setPropreté('bonne');
        }
        return $this->getPropreté();
    }



    abstract public function afficherSesCaractéristiques();

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




    // set et get
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPropreté($propreté)
    {
        $this->propreté = $propreté;
    }
    public function getPropreté()
    {
        return $this->propreté;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setAnimals($animals)
    {
        $this->animals = $animals;
    }
    public function getAnimals()
    {
        return $this->animals;
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
