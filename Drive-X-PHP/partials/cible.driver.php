<?php

require_once 'header.php';


if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

    $informationImage   = pathinfo($_FILES['image']['name']);        
    $extensionImage     = $informationImage['extension'];        
    $extensionsArray    = ['png','gif', 'jpg', 'jpeg'];
    
    if($_FILES['image']['size'] <= 1000000) {      

        if(in_array($extensionImage, $extensionsArray)) {
            
            $newImageName = time().rand().rand().'.'.$extensionImage;
            move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/drivers/'.$newImageName);
            $send = true;
            
            require 'bdd.php';
 
            
             $driversName= $_POST["fullname"];
             $driversPays = $_POST["pays"];
             $driversCat = $_POST["category"];
             $driversLike = $_POST["likeits"];
             $driversCoverImage = './assets/img/drivers/'.$newImageName;
             
             var_dump($driversName);
            
             $req = "INSERT INTO drivers (fullname,pays,coverimage,category,likeits) VALUES         
                         (:fullname, 
                         :pays,
                         :coverimage,
                         :category,
                         :likeits)";
            
             $stmt = $bdd->prepare($req);
             $stmt->bindValue(":fullname",$driversName, PDO::PARAM_STR);
             $stmt->bindValue(":pays",$driversPays, PDO::PARAM_STR);
             $stmt->bindValue(":category",$driversCat, PDO::PARAM_STR);
             $stmt->bindValue(":likeits",$driversLike, PDO::PARAM_INT);
             $stmt->bindValue(":coverimage",$driversCoverImage, PDO::PARAM_STR);
             $result = $stmt->execute();
             $stmt->closeCursor();
             var_dump($_POST);
             if($result) {
                 header("Location: ../drivers.php"); 
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