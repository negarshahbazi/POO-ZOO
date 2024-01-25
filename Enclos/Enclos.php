<?php
abstract class Enclos
{
    protected $nom;
    protected $propreté;
    // pouvant prendre comme valeur : mauvaise, correcte, bonne
    protected $nombre = 0;
    protected $animals = [];

    public function __construct($name)
    {
        $this->nom = $name;
        $this->propreté = 'good';
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
        $this->nombre--;
    }

    public function entretenirSiEstVide()
    {
        if ($this->nombre === 0) {
            $this->setPropreté('bonne');
        }
        return $this->getPropreté();
    }



    abstract public function afficherSesCaractéristiques();

    abstract public function afficherSesCaractéristiquesAnimaux(Animaux $animal);




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
}
