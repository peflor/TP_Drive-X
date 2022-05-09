<?php
// var_dump($_POST);

$idDriver = $_POST['driverID'];


require 'bdd.php';
$req = $bdd->prepare("SELECT * FROM drivers WHERE ID= :driverID");

$req->bindValue("driverID", $idDriver, PDO::PARAM_INT);

$req->execute();

$driver = $req->fetchAll(PDO::FETCH_ASSOC);

$req->closeCursor();

// var_dump($driver);
// var_dump($driver[0]['fullname']);

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
    <h2 class="my-5 card shadow text-center bg-success text-white p-3">Modifier un pilote</h2>
    <div class="card shadow p-5">
        <form action="editValid.driver.php" method="POST" enctype="multipart/form-data" class="my-3">
        <div class="form-group">
            <label for="nompilote">Nom du pilote</label>
            <input type="text" name="fullname" class="form-control" id="nompilote"  value="<?= $driver[0]["fullname"]?>">            
        </div>
        <div class="form-group">
            <label for="paysorigine">Pays d'origine du pilote</label>
            <input type="text" name="pays" class="form-control" id="paysorigine" value="<?= $driver[0]["pays"]?>" >            
        </div>
        <div class="form-group">
            <label for="categorypilote">Catégorie du pilote</label>
            <select name="category" class="form-control" id="categorypilote" value="<?= $driver[0]["category"]?>">
                <option>Formule 1</option>
                <option>Gymkhana</option>
                <option>Nascar</option>
                <option>Rallye</option>
                <option>Drag</option>
            </select>
        </div>     
        <div class="form-group">
            <label for="like">Nombre de Likes</label>
            <input type="number" name="likeits" class="form-control" id="like" value="<?= $driver[0]["likeits"]?>" >            
        </div>    
        <div class="form-group">
            <label for="image">Photo du pilote (JPG, PNG ou GIF : taille maximale 1Mo)</label>
            <img src='.<?=$driver[0]["coverimage"]?>' max-width="150px" max-height="auto">
            <input type="file" name="image" class="form-control-file" id="image" >
        </div>
            <input hidden type="text" name="driverID" value="<?= $driver[0]["id"] ?>">
            <button type="submit" class="btn btn-primary my-3"><i class="fas fa-plus-circle"></i> Modifier</button>
        </form> 
    </div>

</div>

</body>