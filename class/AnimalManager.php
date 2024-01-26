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

        $query = $this->db->prepare("INSERT INTO user (nom_de_espece,age,poids,enclos_id) VALUES (:nom_de_espece,:age,:poids,:enclos_id)");
        $query->execute([
            ':nom_de_espece	' =>$animal->getNom(),
            ':age'=> $animal->getAge(),
            ':poids'=> $animal->getPoids(),
            ':enclos_id'=>$_SESSION['enclos_id'],
           	
        ]);
       
   
       
    }

}






?>