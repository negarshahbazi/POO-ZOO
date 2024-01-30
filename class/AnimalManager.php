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
    }
    public function findAll(){
        $animalsObjects = [];
        $query = $this->db->prepare("SELECT * FROM animal WHERE enclos_id=:enclos_id ORDER BY id DESC");
        $query->execute([':enclos_id'=>$_SESSION['enclos_id']]); // You need to execute the query to get results
       $animals= $query->fetchAll(); 
       foreach($animals as $animal){
        $typeAnimal=$animal['nom_de_espece'];
        $newAnimal=new  $typeAnimal($animal);
        $newAnimal->setId($animal['id']);
        $newAnimal->setNomAnimal($animal['nom_de_espece']);
        $newAnimal->setAge($animal['age']);
        $newAnimal->setPoids($animal['poids']);
        $newAnimal->setTaille($animal['taille']);
        $animalsObjects[]=$newAnimal;

    }

    return $animalsObjects;
    }


public function find($id){

    $query = $this->db->query("SELECT * FROM animal WHERE id=".$id);
    $myAnimal=$query->fetch();
    $typeAnimal=$myAnimal['nom_de_espece'];
    $newMyAnimal = new  $typeAnimal($myAnimal);
    // $newMyAnimal->setId($myAnimal['id']);
    // $newMyAnimal->setNomAnimal($myAnimal['nom_de_espece']);
    // $newMyAnimal->setAge($myAnimal['age']);
    // $newMyAnimal->setPoids($myAnimal['poids']);
    // $newMyAnimal->setTaille($myAnimal['taille']);

    return  $newMyAnimal;
}

public function findByEnclosure(Enclos $enclos) {
    $request = $this->db->prepare("SELECT * FROM animal WHERE enclos_id = :id");
    $request->execute([
        'id' => $enclos->getId(),
    ]);

    $animalsData = $request->fetchAll();
    $animals = [];

    foreach($animalsData as $animalData) {
        $especeAnimal = $animalData['nom_de_espece'];
        $animal = new $especeAnimal($animalData);
        $animals[] = $animal;    
    }

    return $animals;
}

}






?>