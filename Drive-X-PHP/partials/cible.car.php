<?php

require_once 'header.php';

// var_dump($_POST);

if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

    $informationImage   = pathinfo($_FILES['image']['name']);        
    $extensionImage     = $informationImage['extension'];        
    $extensionsArray    = ['png','gif', 'jpg', 'jpeg'];
    
    if($_FILES['image']['size'] <= 1000000) {      

        if(in_array($extensionImage, $extensionsArray)) {
            
            $newImageName = time().rand().rand().'.'.$extensionImage;            
            var_dump($_FILES['image']['tmp_name']);
            move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/cars/'.$newImageName);
            $send = true;
            header("Location: ../cars.php");    
                   
        }else{?>
            <div class="container my-5 text-center">            
                <h4>L'extension de fichier "<?= $extensionImage ?>" n'est pas prise en charge<br>
                veuillez choisir un autre fichier</h4>
                <a href="../form.car.php" class="btn btn-success my-5">revenir au formulaire</a>            
            </div>
        <?php }
    
    }else{ ?>
        <div class="container my-5 text-center">            
            <h4>Le fichier est trop volumineux merci de recommencer</h4>
            <a href="../form.car.php" class="btn btn-success my-5">revenir au formulaire</a>            
        </div>
<?php }
}

// var_dump($_FILES['image']);

if (!empty($_POST)) {
    $carName= $_POST["name"];
    $carPays = $_POST["pays"];
    $carPower = $_POST["power"];
    $carPerf = $_POST["perf"];
    
    echo $carName."<br>";
    echo $carPays."<br>";
    echo $carPower."<br>";
    echo $carPerf."<br>";
       
} 



// header("Location: cars.php");

?>