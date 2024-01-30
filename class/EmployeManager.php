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
        $id = $this->db->lastInsertId();
        $employe->setIdEmployee($id);
        $_SESSION['employee_id']=$id; 
      
       
    }
    public function findAll(){
        $query = $this->db->prepare("SELECT * FROM employee");
        $query->execute(); // You need to execute the query to get results
       $employees= $query->fetchAll(); 
       foreach($employees as $employee){
        $newEmployee=new Employee($employee);
        // $newEmployee->setId($employee['id']);
        $newEmployee->setNameEmployee($employee['nom']);

    }

    return $newEmployee;
    }


public function find($id){
    $query = $this->db->query("SELECT * FROM employee WHERE id=".$id);
  $myEmploye=$query->fetch();
    $newenclos = new Employee($myEmploye);
    // $new->setId($myEmploye['id']);
    $newenclos->setNameEmployee($myEmploye['nom']);

    return  $newenclos;
}

}