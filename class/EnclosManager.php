<?php
class EnclosManager
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function add(Enclos $enclos)
    {
        $zooId = isset($_SESSION['zoo_id']) ? $_SESSION['zoo_id'] : null;
        $query = $this->db->prepare("INSERT INTO enclos (nom, degre_de_proprete, nombre, zoo_id) VALUES (:nom, :degre_de_proprete, :nombre, :zoo_id)");
        $query->execute([
            ':nom' => $enclos->getNom(),
            ':degre_de_proprete' => $enclos->getPropreté(),
            ':nombre' => $enclos->getNombre(),
            ':zoo_id' => $zooId,
        ]);

        $id = $this->db->lastInsertId();
        $enclos->setId($id);
        $_SESSION['enclos_id'] = $id;
    }

    public function findAll()
    {
        $enclosObjects = [];
        $query = $this->db->prepare("SELECT * FROM enclos  WHERE zoo_id = :zoo_id ORDER BY id DESC");
        $query->execute([':zoo_id' => $_SESSION['zoo_id']]);
        $enclos = $query->fetchAll();

        foreach ($enclos as $enclo) {
            $type = $enclo['nom'];
            $newEnclo = new $type($enclo);
            $newEnclo->setNom($enclo['nom']);
            $newEnclo->setId($enclo['id']);
            $newEnclo->setPropreté($enclo['degre_de_proprete']);
            $newEnclo->setNombre($enclo['nombre']);
            $enclosObjects[] = $newEnclo;
        }

        return $enclosObjects;
    }

    public function find($id)
    {
        $query = $this->db->prepare("SELECT * FROM enclos WHERE id=:id");
        $query->execute([':id'=>$id]);
        $myEnclos = $query->fetch();

        $type = $myEnclos['nom'];
        $newe = new $type($myEnclos);
        $newe->setId($myEnclos['id']);
        $newe->setNom($myEnclos['nom']);
        $newe->setPropreté($myEnclos['degre_de_proprete']);
        $newe->setNombre($myEnclos['nombre']);

        return $newe;
    }
    public function update(Enclos $enclos)
    {
        $query = $this->db->prepare("UPDATE enclos SET degre_de_proprete = :degre_de_proprete, nombre = :nombre WHERE id = :id");
        $query->execute([
            ':degre_de_proprete' => $enclos->getPropreté(),
            ':nombre' => $enclos->getNombre(),  
            ':id' => $enclos->getId()

        ]);
        $myUpdate = $query->fetch();
        $_SESSION['enclos_id'] = $enclos->getId();

    }

}
?>
