<?php require_once "data.repo.php"; ?>
<?php require_once "services.php"; ?>

<?php require_once "partials/header.php" ?>

<main class="container">

    <h1 class="my-5">
        <?= $driverTitle ?>
    </h1>

    <a href="form.driver.php" class="btn btn-success"><i class="fas fa-plus-circle"></i> Ajouter un pilote</a>
    
    <div class="row flex-lg-row flex-xl-row flex-column">

       <?php foreach($drivers as $driver ):?>
            <?php require "partials/driver.card.php" ?>
       <?php endforeach;?>

    </div>

   
</main>

<?php require "partials/footer.php" ?>

</body>

</html>