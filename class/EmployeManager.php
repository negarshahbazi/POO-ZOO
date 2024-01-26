<?php
class EmployeManager {

    private $db;
 
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function add(Employee $employe)
    {

        $query = $this->db->prepare("INSERT INTO employee (nom,age,sexe,zoo_id) VALUES (:nom,:age,:sexe,:zoo_id) ");
        $query->execute([
            ':nom' =>$employe->getNameEmployee(),
            ':age'=> $employe->getAge(),
            ':sexe'=>$employe->getSexe(),
            ':zoo_id'=> $_SESSION['zoo_id']
           	
        ]);
        $query->fetch();
      
       
    }

}