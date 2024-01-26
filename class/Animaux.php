<?php
abstract class Animaux
{


    protected int $poids;
    protected int $taille;
    protected string $nomAnimal;
    protected int $age;
    protected bool $isFaim = true;
    protected bool $isDormir = false;
    protected bool $isMalad = false;


    public function __construct($data)
    {
        $this->poids =$data['poids'];
        $this->taille =$data['taille'];
        $this->nomAnimal =$data['nom_de_espece'];
        $this->age =$data['age'];
    }



    public function setPoids($poids)
    {
        return $this->poids=$poids;
    }
    public function getPoids()
    {
        return $this->poids;
    }


    public function setTaille($taille)
    {
        return $this->taille=$taille;
    }
    public function getTaille()
    {
        return $this->taille;
    }

    public function setNomAnimal($nom)
    {
        return $this->nomAnimal=$nom;
    }
    public function getNomAnimal()
    {
        return $this->nomAnimal;
    }

    public function setAge($age)
    {
        return $this->age=$age;
    }
    public function getAge()
    {
        return $this->age;
    }



    public function setIsFaim($isFaim)
    {
        $this->isFaim = $isFaim;
    }

    public function getIsFaim()
    {
        return $this->isFaim;
    }
    public function setIsDormir($isDormir)
    {
        $this->isDormir = $isDormir;
    }

    public function getIsDormir()
    {
        return $this->isDormir;
    }
    public function setIsMalad($isMalad)
    {
        $this->isMalad = $isMalad;
    }

    public function getIsMalad()
    {
        return $this->isMalad;
    }








    // Méthodes abstraites à implémenter dans les classes spécifiques
    abstract public function son();
    abstract public function mouvement();



    public function manger(){
       
            $this->isFaim = false;
        
        return " c'est plein."; 
    }
    public function dormir(){
        $this->isDormir = true;
        return " c'est dormir.";
    }
    public function reveiller(){
        $this->isDormir = false;
        $this->isFaim=true;
        return " c'est reveiller.";
    }
    public function soigne(){
        $this->isMalad = false;
        return " c'est santé.";
    }

    public function displayInfo()
    {
        return "nom: {$this->nomAnimal}, poids: {$this->poids} kg, taille: {$this->taille} m, age: {$this->age} years";
    }
}
