<?php
require_once "services.php";
?>

<div class="card text-center shadow my-3">

    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= ucwords($car["nom"]) ?></h2>
    </div>

    <div class="card-body">
        <img src="<?= $car["coverimage"] ?>" class="img-fluid" alt="photo de <?= $car["nom"] ?>">
        <hr>

        <?php if($car["pays"]): ?>
        <p>Origine:
            <span><?= mb_strtoupper($car["pays"]) ?></span>
        </p>
        <?php else: ?>
        <p>Origine:
            <span>NC</span>   
        </p>
        <?php endif ?>

    <!-- appel de la fonction dans services.php-->
    <p>Puissance : <?php carPowerSwitch($car["puissance"]) ?></p>    

        <?php if(empty($car["perf"])): ?>
            <p>0 à 100 km/h: NC </p>
        <?php else: ?>
            <p>0 à 100 km/h: <span><?= $car["perf"] ?> sec</span></p>
        <?php endif ?>

        <p>Réserver maintenant !</p>
        <button class="btn btn-primary ">Réserver</button>
    </div>
</div>
<hr>
