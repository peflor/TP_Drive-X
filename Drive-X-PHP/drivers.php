<?php require_once "data.repo.php"?>

<?php require_once "./partial/header.php"?>

    

    <div class="container">

        <h1 class="my-5">
            <?= $driversTitle ?>
        </h1>

        <div class="row flex-lg-row flex-xl-row flex-column">
            <?php 
            for ($i = 0; $i < count($drivers) ; $i++) {
                require "drivers.repo.php";
            }            
            ?>
        </div>    
    </div>

  
    <?php require_once "./partial/footer.php"?>
