<?php
require_once('./config/autoloader.php');
require_once('./config/db.php');

// zoo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nomZoo']) && !empty($_POST['nomZoo']) && isset($_POST['submit'])) {

    $zoo = new ZooManager($db);
    $zoo->add(new Zoo([
        'nom_de_zoo' => $_POST['nomZoo'],
    ]));
    $zooo = $zoo->find($_SESSION['zoo_id']);
    //   var_dump($zooo);
}
// employee
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['ageEmployee']) && !empty($_POST['ageEmployee']) && isset($_POST['submit'])) {

    $employee = new EmployeManager($db);
    $employee->add(new Employee([
        'nom' => $_POST['nom'],
        'age' => $_POST['ageEmployee'],
        'sexe' => $_POST['sexe'],
    ]));
    $employe = $employee->find($_SESSION['employee_id']);
    //    var_dump($employe);

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/the-saroja" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="background">
    <form action="" method="post">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link btnEmployee bg-secondary-subtle" href="#">Add Employée</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <img class="myPic" src="./images/zooo.webp" alt="">
            </div>



            <!-- employee -->
            <div class="card-body d-flex flex-column justify-content-center align-items-center employee">
                <h5 class="card-title">Caractéristiques Employée:</h5>
                <input type="text" name="nom" value="" placeholder="Nom:">
                <input type="text" name="nomZoo" value="" placeholder="Nom du zoo:">

                <input type="text" name="ageEmployee" value="" placeholder="âge:">
                Sexe:<select name="sexe" id="">
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>

                </select>
                <button class="btn btn-primary m-2 valid" name="submit" type="submit">valid</button>
            </div>


        </div>
    </form>
    <div class="d-flex justify-content-between align-items-center">
        <div class="myText col-6">
            <?php if (isset($zooo)) {  ?>
                <div>
                    <h1>Bienvenue dans "<?= $zooo ? $zooo->getName() : "..." ?>".</h1>
                </div>
                <div>
                    <h6>je m'appelle "<?php echo $employe->getNameEmployee() ?>" responsable de zoo</h6>
                </div>
                <div><img class="girl"src="./images/<?= $employe->getSexe() ?>.webp" alt=""><a href="./Interfaces/InterfaceEnclos.php"><img class="w-25 flesh" src="./images/next.gif" alt=""></a>
                </div>
            <?php } ?>
        </div>

        <div class="col-6">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>