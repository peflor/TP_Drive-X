<div class="card text-center shadow my-3">

    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= $car["name"] ?></h2>
    </div>

    <div class="card-body">
        <img src="<?= $car["coverImage"] ?>" class="img-fluid" alt="photo de <?= $car["name"] ?>">
        <hr>
        <p>Origine:
            <span><?= $car["pays"] ?></span>
        </p>

        <p>Puissance: <span class="badge badge-warning"> <?= $car["power"] ?> </span> </p>

        <p>0 à 100 km/h: <span><?= $car["perf"] ?> sec</span></p>

        <p>Réserver maintenant !</p>
        <button class="btn btn-primary ">Réserver</button>
    </div>
</div>
<hr>