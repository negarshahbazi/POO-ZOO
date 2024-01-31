<?php
require_once('../config/autoloader.php');
require_once('../config/db.php');

$enclo = new EnclosManager($db);

// enclos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['propreté']) && !empty($_POST['propreté']) && isset($_POST['submit'])) {
    $enclosType= $_POST['type'];
    // var_dump($_SESSION['zoo_id']);
    $enclo->add(new $enclosType([
        'nom' => $_POST['type'],
        'degre_de_proprete' => $_POST['propreté'],
    ]));
    // var_dump($myEnclos);
}
$myEnclos=$enclo->findAll();
// foreach($myEnclos as $myEnclo){
//   $enclo->update($myEnclo);  
// }

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
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                       
                        <li class="nav-item">
                            <a class="nav-link btnenclos" href="#">Add Enclos</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div>
                <img class="myPic" src="./images/zooo.webp" alt="">
            </div>
      
         
     
            <!-- enclos -->
            <div class="card-body d-flex flex-column justify-content-center align-items-center enclos">
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
          
        </div>
    </form>


<div class="col-4"></div>

 <?php foreach($myEnclos as $myEnclo){?>
    <div class="card col-4" style="width: 18rem;">
  <img src="../images/<?php echo $myEnclo->getNom()?>.webp" class="card-img-top" alt="...">
    <div class="card-body bg-success">
    <h5 class="card-title ">Type: <?php echo $myEnclo->getNom()?></h5>
    <h5 class="card-title">Propreté: <?php echo $myEnclo->getPropreté()?></h5>
    <h5 class="card-title">Nombre: <?php echo $myEnclo->getNombre()?></h5>
    <h5 class="card-title">id : <?= $myEnclo->getId() ?> </h5>
    <form action="./InterfaceAnimal.php" method="POST" >
            <input type="hidden" name="cach" value="<?php echo $myEnclo->getNom()?>">
            <input type="hidden" name="id_enclos" value="<?= $myEnclo->getId()?>">
            <button type="submit" class="btn btn-primary">AJOUT ANIMAL</button>
        </form>
  
  </div>
  </div>
<?php }?> 
    <script src="../main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>