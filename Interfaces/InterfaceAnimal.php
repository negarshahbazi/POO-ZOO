<?php
require_once('../config/autoloader.php');
require_once('../config/db.php');

$idEnclos = isset($_POST['id_enclos']) ? $_POST['id_enclos'] : null;

$enclosManager = new EnclosManager($db);
$enclos = $enclosManager->find($idEnclos);

$myAnimal = new AnimalManager($db);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nom_de_espece']) && !empty($_POST['nom_de_espece']) && isset($_POST['age']) && !empty($_POST['age']) && isset($_POST['taille']) && !empty($_POST['taille']) && isset($_POST['poids']) && !empty($_POST['poids']) && isset($_POST['submit'])) {
    $animalType = $_POST['nom_de_espece'];
    $animal = new $animalType([
        'nom_de_espece' => $_POST['nom_de_espece'],
        'age' => $_POST['age'],
        'poids' => $_POST['poids'],
        'taille' => $_POST['taille'],
    ]);
    $correctAnimal = $enclos->addAnimal($animal);
    if ($correctAnimal) {
        $myAnimal->add($animal);
    }
    // $animal= $myAnimal->find($_POST['id_enclos']);
    $enclosManager->update($enclos);
}
$animals = $myAnimal->findByEnclosure($enclos);
// delete

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // var_dump($_POST['id_delete']);
    $animalIdToDelete = $_POST['id_delete'];
    $animalToDelete = $myAnimal->find($animalIdToDelete);
    $enclos->removeAnimal($animalToDelete);
    if ($animalToDelete) {
        $myAnimal->delete($animalIdToDelete);
    }else {
        // Handle the case where the animal to delete is not found
        echo "Animal not found.";
    }
    $enclosManager->update($enclos);
  

}
// zoo
// $zoo=new ZooManager($db);
// $zooo=new Zoo($zoo);
// $zooo->main();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="background">
    <form action="" method="post">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="card text-center">
                <div class="card-header d-flex">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link shadow-lg" href="../index.php">Zoo</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link shadow-lg" href="./InterfaceEnclos.php">Enclos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btnanimal shadow-lg bg-secondary-subtle" href="#">Add Animal</a>
                        </li>
                      

                    </ul>
                </div>
            </div>
            <div>
                <img class="myPic " src="../images/zooo.webp" alt="">
                <h3 class="text-danger placeholder-glow" my-2>Enclos type : <?= $enclos->getNom()?> </h3>
            </div>

            <!-- animal -->

            <div class="card-body d-flex flex-column justify-content-center align-items-center animal">
                <h5 class="card-title">Caractéristiques Animal:</h5>
                <form method="post">

                    </select>
                    Nom de l'espèce:<select name="nom_de_espece" id="">
                        <option value="Tigres">Tigres</option>
                        <option value="Poissons">Poissons</option>
                        <option value="Ours">Ours</option>
                        <option value="Aigles">Aigles</option>
                    </select>


                    <input type="text" name="age" value="" placeholder="age:">
                    <input type="text" name="taille" value="" placeholder="taille:">
                    <input type="text" name="poids" value="" placeholder=" poids:">
                    <input type="hidden" name="id_enclos" value="<?= $enclos->getId() ?>">

                    <button class="btn btn-primary m-2 " name="submit" type="submit">valid</button>
                </form>
            </div>

        </div>
    </form>
    <div class="row">

    <?php if (!is_null($animals) && is_array($animals)) { ?>

        <?php foreach ($animals as $animal) { ?>
            <div class="card col-4 bg-primary-subtle" style="width: 18rem; background-image:url(../images/Nouveau/<?php echo $animal->getNomAnimal()?>.webp);">
                <img src="../images/<?php echo $animal->getNomAnimal() ?>.webp" class="card-img-top" alt="...">
                <!-- <img src="../images/negar/<?php echo $animal->getNomAnimal() ?>.webp"  alt="..."> -->
                <img src="../images/negar/<?php echo $animal->getNomAnimal() ?>.webp"  alt="...">

                <div class="card-body ">
                    <h5 class="card-title ">Espece: <?php echo $animal->getNomAnimal() ?></h5>
                    <h5 class="card-title">Age: <?php echo $animal->getAge() ?></h5>
                    <h5 class="card-title">Poids: <?php echo $animal->getPoids() ?></h5>
                    <h5 class="card-title">Taille: <?php echo $animal->getTaille() ?></h5>
                    <h5 class="card-title">Son: <?php echo $animal->son() ?></h5>
                    <h5 class="card-title">Mouvement: <?php echo $animal->mouvement() ?></h5>
                    <h5 class="card-title">Mouvement: <?php echo $animal->getIsFaim()?'A faim':'Rassas' ?></h5>

                  



                    <h5 class="card-title text-success">id: <?php echo $animal->getId() ?></h5>

                    <form method="post">
                    <input type="hidden" name="id_enclos" value="<?= $enclos->getId() ?>">
                        <input type="hidden" name="id_delete" value="<?= $animal->getId() ?>">
                        <button class="btn btn-primary" type="submit" name="delete">DELETE ANIMAL</button>
                    </form>
                </div>
            </div>

        <?php } ?>
    <?php } ?>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>