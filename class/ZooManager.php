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

        $query = $this->db->prepare("INSERT INTO zoo (nom_de_zoo,nom_employee,max_enclos) VALUES (:nom_de_zoo,:nom_employee,:max_enclos) ");
        $query->execute([
            ':nom_de_zoo' =>$zoo->getName(),
            ':nom_employee'=> $zoo->getEmployee(),
            ':max_enclos'=>5,
           	
        ]);
        $query->fetch();
        $id = $this->db->lastInsertId();
        $zoo->setId($id);
        $_SESSION['zoo_id']=$id;

      
       
    }

}