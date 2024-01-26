<?php
class AnimalManager {

    private $db;
    private $animal=[];

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function add(Animaux $animal)
    {

        $query = $this->db->prepare("INSERT INTO animal (nom_de_espece,age,poids,taille,enclos_id) VALUES (:nom_de_espece,:age,:poids,:taille,:enclos_id)");
        $query->execute([
            ':nom_de_espece' =>$animal->getNomAnimal(),
            ':age'=> $animal->getAge(),
            ':poids'=> $animal->getPoids(),
            ':taille'=>$animal->getTaille(),
            ':enclos_id'=>$_SESSION['enclos_id'],
           	
        ]);
       
        $query->fetch();
       
    }

}






?>