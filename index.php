<?php
// require_once('./config/autoload.php');
// require_once('./config/db.php');



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="background">
    <form action="">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link  activ" href="#">ZOO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Add Employée</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Enclos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Add Animal</a>
                    </li>
                </ul>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">Caractéristiques ZOO:</h5>
                <input type="text" name="nom" value="" placeholder="Nom du zoo:">
                <input type="text" name="Un_nombre_maximal_denclos" value="" placeholder="Un nombre maximal d'enclos:">
                <a href="#" class="btn btn-primary m-2">Valid</a>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">Caractéristiques Employée:</h5>
                <input type="text" name="nom" value="" placeholder="Nom:">
                <input type="text" name="Un_nombre_maximal_denclos" value="" placeholder="âge:">
                <input type="text" name="Un_nombre_maximal_denclos" value="" placeholder="sexe:">
                <a href="#" class="btn btn-primary m-2">Valid</a>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">Caractéristiques Enclos:</h5>
                <input type="text" name="nom" value="" placeholder="Nom:">
                pro<select name="propreté" id="">
                    <option value="mauvaise">mauvaise</option>
                    <option value="correcte">correcte</option>
                    <option value="bonne">bonne</option>
                </select>
                <a href="#" class="btn btn-primary m-2">Valid</a>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">Caractéristiques Animal:</h5>
                <input type="text" name="nom" value="" placeholder="Nom de l'espèce:">
                <input type="text" name="nom" value="" placeholder="âge:">
                <input type="text" name="nom" value="" placeholder="taille:">
                <input type="text" name="nom" value="" placeholder=" poids:">
              
                
                <a href="#" class="btn btn-primary m-2">Valid</a>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>