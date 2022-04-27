<?php require_once "data.repo.php"?>


    <?php require_once "./partial/header.php"?>

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

        <div class="card-deck  justify-content-center">

            <div class="card text-center shadow">

                <div class="card-header bg-dark text-white">
                    <h2 class="card-title"><?= $drivers[8]["fullName"] ?></h2>
                </div>

                <div class="card-body">

                    <img src="<?= $drivers[8]["coverImage"] ?>" width="300px" height="150px" class="img-fluid"
                        alt="photo <?= $drivers[8]["fullName"] ?>">
                    <hr>

                    <p>Origine: <?= $drivers[8]["pays"] ?></p>

                    <p>Discipline:
                        <span class=" badge badge-primary"><?= $drivers[8]["category"] ?></span>
                    </p>

                    <button class="btn btn-success mx-2 border">
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
            </div>
            <hr>
            <div class="card text-center shadow">

                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title"><?= $drivers[5]["fullName"] ?></h2>
                </div>

                <div class="card-body">

                    <img src="<?= $drivers[5]["coverImage"] ?>" width="300px" height="150px" class="img-fluid"
                        alt="photo <?= $drivers[5]["fullName"] ?>">
                    <hr>

                    <p>Origine: <?= $drivers[5]["pays"] ?></p>

                    <p>Discipline:
                        <span class=" badge badge-danger"><?= $drivers[5]["category"] ?></span>
                    </p>

                    <button class="btn btn-success mx-2 border" >
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
            </div>
            <hr>


        </div>


        <h2 class="my-5 text-center">Nos Meilleures Voitures</h2>

        <div class="card-deck  justify-content-center">

            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title">Bugatti Chiron</h2>
                </div>

                <div class="card-body">
                    <img src="./assets/img/cars/bugatti.jpg"
                        class="img-fluid" alt="photo de bugatti">
                    <hr>
                    <p>Origine: France

                    </p>

                    <p>Puissance: <span class="badge badge-info">1500 CH</span></p>

                    <p>0 à 100 km/h: <span> 2.4 sec</span></p>

                    <p>Réserver maintenant !</p>

                    <button class="btn btn-primary ">Réserver</button>
                </div>
            </div>
            <hr>

            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title">Mercedes Amg One</h2>
                </div>

                <div class="card-body">
                    <img src="./assets/img/cars/mercedes.jpg"
                        class="img-fluid" alt="photo de voiture name">
                    <hr>
                    <p>Origine: Allemagne

                    </p>

                    <p>Puissance: <span class="badge badge-info">1000 CH</span></p>

                    <p>0 à 100 km/h: <span> 2.2 sec</span></p>

                    <p>Réserver maintenant !</p>

                    <button class="btn btn-primary ">Réserver</button>
                </div>
            </div>
            <hr>

        </div>


    </div>


    <?php require_once "./partial/footer.php"?>
