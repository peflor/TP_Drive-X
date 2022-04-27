<?php require_once "data.repo.php"?>

<!DOCTYPE html>
<html lang="fr">

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
<?php require_once "./partial/header.php"?>
    
    <div class="container">

        <h1 class="my-5">
            Nos Vehicules
        </h1>
        
       

        <div class="row flex-lg-row flex-xl-row flex-column">

        <?php 
            for ($i = 0; $i < count($cars) ; $i++) {
                require "cars.repo.php";
            }            
            ?>

        </div>


    </div>

    
    <?php require_once "./partial/footer.php"?>
</body>

</html>