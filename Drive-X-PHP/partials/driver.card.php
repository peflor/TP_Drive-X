<div class="<?php echo $driver["likeIts"]>0 ? "card text-center shadow my-3 border border-success" : ($driver["likeIts"]<0 ? "card text-center shadow my-3 border border-danger":  "card text-center shadow my-3") ?>" >

    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= ucwords($driver["fullName"]) ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="<?= $driver["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullName"] ?>">
        <hr>

        <?php if(empty($driver["pays"])): ?>
        <p>Origine:
            <span>NC</span>
        </p>
        <?php else: ?>
            <p>Origine:
            <span><?= mb_strtoupper($driver["pays"]) ?></span>
        </p>
        <?php endif ?>

<?php switch($driver["category"]): ?>
<?php case $driver["category"]="formule 1": ?>
    <p>Discipline:
            <span class="badge badge-success"> <?= $driver["category"] ?> </span>
        </p>
<?php break; ?>
<?php case $driver["category"]="gymkhana": ?>
    <p>Discipline:
            <span class="badge badge-danger"> <?= $driver["category"] ?> </span>
        </p>
<?php break; ?>
<?php case $driver["category"]="nascar": ?>
    <p>Discipline:
            <span class="badge badge-warning"> <?= $driver["category"] ?> </span>
        </p>
<?php break; ?>
<?php case $driver["category"]="rallye": ?>
    <p>Discipline:
            <span class="badge badge-info"> <?= $driver["category"] ?> </span>
        </p>
<?php break; ?>
<?php case $driver["category"]="drag": ?>
    <p>Discipline:
            <span class="badge badge-primary"> <?= $driver["category"] ?> </span>
        </p>
<?php break; ?>
<?php endswitch ?>
      

        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

    </div>
</div>
<hr>
