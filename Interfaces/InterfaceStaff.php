<?php
require_once('./config/autoloader.php');
require_once('./config/db.php');

// zoo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nomZoo']) && !empty($_POST['nomZoo']) && isset($_POST['nom_employee']) && !empty($_POST['nom_employee']) && isset($_POST['submit'])) {

    $zoo = new ZooManager($db);
    $zoo->add(new zoo([
        'nomZoo' => $_POST['nomZoo'],
        'nom_employee' => $_POST['nom_employee'],
    ]));
  $zoo->find( $_SESSION['zoo_id']);
}
// employee
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['ageEmployee']) && !empty($_POST['ageEmployee']) && isset($_POST['submit'])) {

    $employee = new EmployeManager($db);
    $employee->add(new Employee([
        'nom' => $_POST['nom'],
        'ageEmployee' => $_POST['ageEmployee'],
        'sexe' => $_POST['sexe'],
    ]));
}
// enclos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['propreté']) && !empty($_POST['propreté']) && isset($_POST['submit'])) {

    $enclosType = $_POST['type'];

    $employee = new EnclosManager($db);
    // var_dump($_SESSION['zoo_id']);
    $employee->add(new $enclosType([
        'type' => $_POST['type'],
        'propreté' => $_POST['propreté'],
    ]));
}
// // animal
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nom_de_espece']) && !empty($_POST['nom_de_espece']) && isset($_POST['age']) && !empty($_POST['age']) && isset($_POST['taille']) && !empty($_POST['taille']) && isset($_POST['poids']) && !empty($_POST['poids']) && isset($_POST['submit'])) {

    $animalType = $_POST['nom_de_espece'];

    $employee = new AnimalManager($db);
    // var_dump($_SESSION['enclos_id']);
    $employee->add(new $animalType([
        'nom_de_espece' => $_POST['nom_de_espece'],
        'age' => $_POST['age'],
        'poids' => $_POST['poids'],
        'taille' => $_POST['taille'],
    ]));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="background">
    <form action="" method="post">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link  btnzoo activ" href="#">ZOO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btnemployee" href="#">Add Employée</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btnenclos" href="#">Add Enclos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btnanimal" href="#">Add Animal</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <img class="myPic" src="./images/zooo.webp" alt="">
            </div>
      
            <!-- zoo -->
            <div class="card-body d-none flex-column justify-content-center align-items-center zoo">
                <h5 class="card-title">Caractéristiques ZOO:</h5>
                <input type="text" name="nomZoo" value="" placeholder="Nom du zoo:">
                <input type="text" name="Un_nombre_maximal_denclos" value="5" placeholder="Un nombre maximal d'enclos:">
                <input type="text" name="nom_employee" value="" placeholder="nom_employee:">

                <button class="btn btn-primary m-2" name="submit" type="submit">valid</button>
            </div>
            <!-- employee -->
            <div class="card-body d-none flex-column justify-content-center align-items-center employee">
                <h5 class="card-title">Caractéristiques Employée:</h5>
                <input type="text" name="nom" value="" placeholder="Nom:">
                <input type="text" name="ageEmployee" value="" placeholder="âge:">
                sexe:<select name="sexe" id="">
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>

                </select>
                <button class="btn btn-primary m-2 " name="submit" type="submit">valid</button>
            </div>
            <!-- enclos -->
            <div class="card-body d-none flex-column justify-content-center align-items-center enclos">
                <h5 class="card-title">Caractéristiques Enclos:</h5>
                Nom:<select name="type" id="">
                    <option value="Aquariums">Aquariums</option>
                    <option value="Terr">Terr</option>
                    <option value="Volieres">Volieres</option>
                </select>
                degré de propreté:<select name="propreté" id="">
                    <option value="mauvaise">mauvaise</option>
                    <option value="correcte">correcte</option>
                    <option value="bonne">bonne</option>
                </select>
                <button class="btn btn-primary m-2 " name="submit" type="submit">valid</button>
            </div>
            <!-- animal -->
            <div class="card-body d-none flex-column justify-content-center align-items-center animal">
                <h5 class="card-title">Caractéristiques Animal:</h5>
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

                <button class="btn btn-primary m-2 " name="submit" type="submit">valid</button>
            </div>
        </div>
    </form>




    <script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>