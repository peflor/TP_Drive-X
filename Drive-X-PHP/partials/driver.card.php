<?php require_once "services.php"?>

<div class="card text-center shadow my-3 <?php echo ($driver["likeIts"]>0) ? " border border-success" : ( ($driver["likeIts"]<0) ? "border border-danger":  "") ?>" >
<!-- avec le if en ternaire on doit mettre le echo devant la condition -->

    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= ucwords($driver["fullName"]) ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="<?= $driver["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullName"] ?>">
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

    </div>
</div>
<hr>
