<?php


require 'bdd.php';
 

$idDriver = $_POST["driverID"]; 
$driverName= $_POST["fullname"];
$driverPays = $_POST["pays"];
$driverCat = $_POST["category"];
$driverLike = $_POST["likeits"];


$stmt = $bdd->prepare("UPDATE drivers SET fullname = :fullname WHERE ID = :driverID");
$stmt->bindValue(":driverID",$idDriver, PDO::PARAM_INT);
$stmt->bindValue(":fullname",$driverName, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

$stmt = $bdd->prepare("UPDATE drivers SET pays = :pays WHERE ID = :driverID");
$stmt->bindValue(":driverID",$idDriver, PDO::PARAM_INT);
$stmt->bindValue(":pays",$driverPays, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

$stmt = $bdd->prepare("UPDATE drivers SET category = :category WHERE ID = :driverID");
$stmt->bindValue(":driverID",$idDriver, PDO::PARAM_INT);
$stmt->bindValue(":category",$driverCat, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

$stmt = $bdd->prepare("UPDATE drivers SET likeits = :likeits WHERE ID = :driverID");
$stmt->bindValue(":driverID",$idDriver, PDO::PARAM_INT);
$stmt->bindValue(":likeits",$driverLike, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

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

            $driverCoverImage = './assets/img/drivers/'.$newImageName;
             
            $stmt = $bdd->prepare("UPDATE drivers SET coverimage = :image WHERE ID = :driverID");
            $stmt->bindValue(":driverID",$idDriver, PDO::PARAM_INT);
            $stmt->bindValue(":image",$driverCoverImage, PDO::PARAM_STR);
            $result = $stmt->execute();
            $stmt->closeCursor();

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

if($result) {
    header("Location: ../drivers.php"); 
}
 

?>