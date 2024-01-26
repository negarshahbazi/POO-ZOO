<?php
class EnclosManager {

    private $db;
    private $enclos=[];

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function add(Enclos $enclos)
    {

        $query = $this->db->prepare("INSERT INTO enclos (nom,degre_de_proprete,zoo_id,nombre) VALUES (:nom,:degre_de_proprete,:zoo_id,:nombre) ");
        $query->execute([
            ':nom' =>$enclos->getNom(),
            ':degre_de_proprete'=> $enclos->getPropreté(),
            ':zoo_id'=> $_SESSION['zoo_id'],
            ':nombre'=>$enclos->getNombre()	
        ]);
       
        $id = $this->db->lastInsertId();
        $enclos->setId($id);
        $_SESSION['enclos_id']=$id;
       
    }

}






?>