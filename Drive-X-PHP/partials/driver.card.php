<?php require_once "services.php"?>

<div class="card text-center shadow my-3 <?php echo ($driver["likeits"]>0) ? " border border-success" : ( ($driver["likeits"]<0) ? "border border-danger":  "") ?>" >
<!-- avec le if en ternaire on doit mettre le echo devant la condition -->

    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= ucwords($driver["fullname"]) ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="<?= $driver["coverimage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullname"] ?>">
        <hr>

        <?php if($driver["pays"]): ?>
        <p>Origine:
            <span><?= mb_strtoupper($driver["pays"]) ?></span>
        </p>
        <?php else: ?>
        <p>Origine:
            <span>NC</span>
        </p>
        <?php endif ?>

        <!-- Appel de la fonction dans le fichier services.php -->
        <p>Discipline : <?php driverCategorySwitch($driver["category"])?> </p>
       
      

        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

        <div class="row text-center justify-content-center mt-5">
        <form class="col-3" action="partials/delete.drivers.php" method="POST" onSubmit="return confirm('Êtes-vous certain de vouloir supprimer ce pilote ?')">
            <input hidden type="text" name="driverID" value="<?= $driver["id"] ?>">
            <button class="btn btn-danger " type="submit" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
        </form>
       
        <form class="col-3" action="partials/edit.driver.php" method="POST">
            <input hidden type="text" name="driverID" value="<?= $driver["id"] ?>">
            <button class="btn btn-success" type="submit" title="Modifier"><i class="fas fa-edit"></i></button>
        </form>
        </div>

    </div>
</div>
<hr>
