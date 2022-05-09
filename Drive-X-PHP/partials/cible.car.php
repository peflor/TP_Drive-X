<?php

require_once 'header.php';


if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

    $informationImage   = pathinfo($_FILES['image']['name']);        
    $extensionImage     = $informationImage['extension'];        
    $extensionsArray    = ['png','gif', 'jpg', 'jpeg'];
    
    if($_FILES['image']['size'] <= 1000000) {      

        if(in_array($extensionImage, $extensionsArray)) {
            
            $newImageName = time().rand().rand().'.'.$extensionImage;
            move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/cars/'.$newImageName);
            $send = true;
            
            require 'bdd.php';
 
            //  $carCoverImage ='../assets/img/cars/'.$newImageName;
             $carName= $_POST["nom"];
             $carPays = $_POST["pays"];
             $carPower = $_POST["puissance"];
             $carPerf = $_POST["perf"];
             $carCoverImage = './assets/img/cars/'.$newImageName;
             
            //  var_dump($carName);
            
             $req = "INSERT INTO cars (nom,pays,coverimage,puissance,perf) VALUES         
                         (:nom, 
                         :pays,
                         :coverimage,
                         :puissance,
                         :perf)";
            
             $stmt = $bdd->prepare($req);
             $stmt->bindValue(":nom",$carName, PDO::PARAM_STR);
             $stmt->bindValue(":pays",$carPays, PDO::PARAM_STR);
             $stmt->bindValue(":puissance",$carPower, PDO::PARAM_INT);
             $stmt->bindValue(":perf",$carPerf, PDO::PARAM_STR);
             $stmt->bindValue(":coverimage",$carCoverImage, PDO::PARAM_STR);
             $result = $stmt->execute();
             $stmt->closeCursor();

             if($result) {
                 header("Location: ../cars.php"); 
             }

        }else{?>
            <div class="container my-5 text-center">            
                <h4 class="alert alert-danger">L'extension de fichier "<?= $extensionImage ?>" n'est pas prise en charge<br>
                veuillez choisir un autre fichier</h4>
                <a href="../form.car.php" class="btn btn-success my-5">revenir au formulaire</a>            
            </div>
        <?php }
    
    }else{ ?>
        <div class="container my-5 text-center">            
            <h4 class="alert alert-danger">Le fichier est trop volumineux merci de recommencer</h4>
            <a href="../form.car.php" class="btn btn-success my-5">revenir au formulaire</a>            
        </div>
<?php }
}


 

?>