<?php
class ZooManager {

    private $db;
    private $enclos=[];
    private $animal=[];
  

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function add(Zoo $zoo)
    {

        $query = $this->db->prepare("INSERT INTO zoo (nom_de_zoo,max_enclos) VALUES (:nom_de_zoo,:max_enclos) ");
        $query->execute([
            ':nom_de_zoo' =>$zoo->getName(),
            ':max_enclos'=>$zoo->getMaxEnclos(),
           	
        ]);
   
        $id = $this->db->lastInsertId();
        $zoo->setId($id);
        $_SESSION['zoo_id']=$id;  
    }
    public function findAll(){
        $query = $this->db->prepare("SELECT * FROM zoo");
        $query->execute(); // You need to execute the query to get results
       $zoos= $query->fetchAll(); 
       foreach($zoos as $zoo){
        $newZoo=new zoo($zoo);
        $newZoo->setId($zoo['id']);
        $newZoo->setName($zoo['nom_de_zoo']);
        $newZoo->setMaxEnclos(5);

      
    }

    return $newZoo;
    }


public function find($id){
    $query = $this->db->query("SELECT * FROM zoo WHERE id=".$id);
  $myZoo=$query->fetch();
    $new = new zoo($myZoo);
    $new->setId($myZoo['id']);
    $new->setName($myZoo['nom_de_zoo']);

    return  $new;
}
}