<?php
abstract class Animaux
{

    protected int $id;
    protected int $poids;
    protected int $taille;
    protected string $nomAnimal;
    protected int $age;
    protected bool $isFaim = true;
    protected bool $isDormir = false;
    protected bool $isMalad = false;


    public function __construct($data)
    {
        $this->hydrate($data);
    }



    public function hydrate(array $data) {

        if(isset($data['poids'])) {
            $this->poids =$data['poids'];
        }

        if(isset($data['taille'])) {

            $this->taille =$data['taille'];
        }

        if(isset($data['nom_de_espece'])) {

            $this->nomAnimal =$data['nom_de_espece'];
        }

        if(isset($data['age'])) {

            $this->age =$data['age'];
        }

        if(isset($data['id'])) {
            $this->id = $data['id'];
        }
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
