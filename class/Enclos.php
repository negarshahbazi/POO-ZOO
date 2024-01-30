<?php
abstract class Enclos
{   protected $id;
    protected $nom;
    protected $propreté;
    // pouvant prendre comme valeur : mauvaise, correcte, bonne
    protected $nombre = 0;
    protected $animals = [];

    public function __construct($data)
    {
        $this->nom = $data['nom'];
        $this->propreté = $data['degre_de_proprete'];
    }
    // method
    abstract public function addAnimal(Animaux $animal);
    
    public function removeAnimal(Animaux $animal)
    {
        if(count($this->animals)>=1){
            array_slice($this->animals,-1);
            $this->nombre=count($this->animals);
          
        }else {
            echo "c'est vide";
        }
       
    }

    abstract public function entretenirSiEstVide();
   



    abstract public function afficherSesCaractéristiques();

    public function afficherSesCaractéristiquesAnimaux(Animaux $animal){
        $carAnimal = [];
          $carAnimal[] = $animal->getPoids();
          $carAnimal[] = $animal->getTaille();
          $carAnimal[] = $animal->getNomAnimal();
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
 *
 */ 
public function setId($id)
{
$this->id = $id;


}
}
