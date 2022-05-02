<?php
require_once "data.repo.php";
?>
<?php require_once "partials/header.php" ?>


<div class="container">
    <div class="jumbotron my-5 text-center">
        <h1 class="display-3 text-danger">
            Drive-X
        </h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
            to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" routerLink="cars" role="button">eXotic Cars</a>
        </p>
    </div>

    <h2 class="my-5 text-center">Nos Pilotes d'Exception</h2>

    <div class="card-deck flex-lg-row flex-md-row flex-xl-row flex-column">

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[0]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[0]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[0]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[0]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-success"> <?= $drivers[0]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[1]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[1]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[1]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[1]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-danger"> <?= $drivers[1]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>


    </div>

    <h2 class="my-5 text-center">Nos Meilleures Voitures</h2>

    <div class="card-deck flex-lg-row flex-md-row flex-xl-row flex-column">

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[0]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[0]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[0]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-warning"> <?= $cars[0]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[0]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>
        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[1]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[1]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[1]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-success"> <?= $cars[1]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[1]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>





    </div>



</div>

<?php require "partials/footer.php" ?>

</body>

</html>