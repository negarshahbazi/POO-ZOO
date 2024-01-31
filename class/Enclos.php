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
    // 111111111111111111111111111111111111111111111111111111
    // public function removeAnimal(Animaux $animal)
    // {
    //     if(count($this->animals) >= 1){
    //         foreach($this->animals as $key => $value) {
    //             array_slice($this->animals, $key, $key);
    //             // var_dump($this->animals);
    //             $this->nombre--;
    //         }
    //     }else {
    //         echo "c'est vide";
    //     }
       
    // }

    // 222222222222222222222222222222222222222222222222222222222
    // public function removeAnimal(Animaux $animal)
    // {
    //     $index = array_search($animal, $this->animals); // Find the index of the animal
    
    //     if ($index !== false) {
    //         unset($this->animals[$index]); // Remove the animal from the array
    //         $this->nombre--; // Decrement the count
    //     } else {
    //         echo "L'animal n'est pas présent dans la liste."; // Animal not found
    //     }
    // }
    // 33333333333333333333333333333333333333333333333333333333333333
    public function removeAnimal(Animaux $animal)
{
    // Check if there are animals in the array
    if(count($this->animals) >= 1){
        // Iterate over the animals array
        foreach($this->animals as $key => $value) {
            // Check if the current animal matches the one we want to remove
            if ($value === $animal) {
                // Use unset() to remove the animal from the array
                unset($this->animals[$key]);
                // Decrement the count
                $this->nombre--;
                return; // Exit the function after removing the animal
            }
        }
        // If the animal is not found in the array
        echo "L'animal n'est pas présent dans la liste.";
    } else {
        // If the array is empty
        echo "La liste des animaux est vide.";
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

    public function getNumberArray() {
        return count($this->animals);
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
