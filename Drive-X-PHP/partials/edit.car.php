<?php
// var_dump($_POST);

$idCar = $_POST['carID'];


require 'bdd.php';
$req = $bdd->prepare("SELECT * FROM cars WHERE ID= :carID");

$req->bindValue("carID", $idCar, PDO::PARAM_INT);

$req->execute();

$car = $req->fetchAll(PDO::FETCH_ASSOC);

$req->closeCursor();

// var_dump($car);
// var_dump($car[0]['nom']);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Drive-X</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
    
            <a href="index.php" class="navbar-brand text-danger">Drive-X</a>
        
            <ul class="navbar-nav">
                <li class="nav-item" >
                    <a href="../cars.php" class="nav-link">Voitures</a>
                </li>
                <li class="nav-item" >
                    <a href="../drivers.php" class="nav-link">Pilotes</a>
                </li>
            </ul>
        
        </nav>
    </header>

<div class="container">
    <h2 class="my-5 card shadow text-center bg-success text-white p-3">Modifier un véhicule</h2>
    <div class="card shadow p-5">
        <form action="editValid.car.php" method="POST" enctype="multipart/form-data" class="my-3">
        <div class="form-group">
            <label for="nomvehicule">Nom du véhicule</label>
            <input type="text" name="nom" class="form-control" id="nomvehicule" value="<?= $car[0]["nom"]?>">            
        </div>
        <div class="form-group">
            <label for="paysorigine">Pays d'origine du véhicule</label>
            <input type="text" name="pays" class="form-control" id="paysorigine" value="<?=$car[0]["pays"]?>">            
        </div>
        <div class="form-group">
            <label for="puissancevehicule">Puissance du véhicule en CH</label>
            <input type="number" name="puissance" class="form-control" id="puissancevehicule" value="<?=$car[0]["puissance"]?>" >            
        </div>
        <div class="form-group">
            <label for="performancevehicule">Performance du véhicule en secondes de 0 à 100km/h</label>
            <input type="text" name="perf" class="form-control" id="performancevehicule" value="<?=$car[0]["perf"]?>">            
            </div>
        
        <div class="form-group">
            <label for="image">Photo du véhicule (JPG, PNG ou GIF : taille maximale 1Mo)</label>
            <img src='.<?=$car[0]["coverimage"]?>' max-width="150px" max-height="auto">
            <input type="file" name="image" class="form-control-file mt-3" id="image" >
        </div>
        <input hidden type="text" name="carID" value="<?= $car[0]["id"] ?>">
        <button type="submit" class="btn btn-primary my-3"><i class="fas fa-plus-circle"></i> Modifier</button>
        </form>
    </div>

</div>

</body>