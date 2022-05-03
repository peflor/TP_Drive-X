<div class="card text-center shadow my-3">

    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= ucwords($car["name"]) ?></h2>
    </div>

    <div class="card-body">
        <img src="<?= $car["coverImage"] ?>" class="img-fluid" alt="photo de <?= $car["name"] ?>">
        <hr>

        <?php if(empty($car["pays"])): ?>
        <p>Origine:
            <span>NC</span>
        </p>
        <?php else: ?>
            <p>Origine:
            <span><?= mb_strtoupper($car["pays"]) ?></span>
        </p>
        <?php endif ?>

<?php switch($car["power"]): ?>
<?php case $car["power"]<1000: ?>
<p>Puissance: <span class="badge badge-danger"> <?= $car["power"] ?> </span> </p>
<?php break; ?>
<?php case $car["power"]>=1000 && $car["power"]<=1200: ?>
<p>Puissance: <span class="badge badge-warning"> <?= $car["power"] ?> </span> </p>
<?php break; ?>
<?php case $car["power"]>1200: ?>
<p>Puissance: <span class="badge badge-success"> <?= $car["power"] ?> </span> </p>
<?php break; ?>
<?php endswitch ?>

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
