<?php require_once "data.repo.php";?>
<?php require_once "partials/header.php" ?>
<?php require_once "services.php"; ?>

<main class="container">

    <h1 class="my-5">
        <?= $carTitle ?>
    </h1>

    <a href="form.car.php" class="btn btn-success"><i class="fas fa-plus-circle"></i> Ajouter un véhicule</a>

    <div class="row flex-lg-row flex-xl-row flex-column">

       <?php foreach($cars as $car ):?>
            <?php require "partials/car.card.php" ?>
       <?php endforeach;?>

    </div>


</main>

<?php require "partials/footer.php" ?>

</body>

</html>