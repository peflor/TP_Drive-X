<?php


require 'bdd.php';
 
//  $carCoverImage ='../assets/img/cars/'.$newImageName;
$idCar = $_POST["carID"]; 
$carName= $_POST["nom"];
$carPays = $_POST["pays"];
$carPower = $_POST["puissance"];
$carPerf = $_POST["perf"];
// $carCoverImage = './assets/img/cars/'.$newImageName;

// var_dump($carName);

$stmt = $bdd->prepare("UPDATE cars SET nom = :nom WHERE ID = :carID");
$stmt->bindValue(":carID",$idCar, PDO::PARAM_INT);
$stmt->bindValue(":nom",$carName, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

$stmt = $bdd->prepare("UPDATE cars SET pays = :pays WHERE ID = :carID");
$stmt->bindValue(":carID",$idCar, PDO::PARAM_INT);
$stmt->bindValue(":pays",$carPays, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

$stmt = $bdd->prepare("UPDATE cars SET puissance = :puissance WHERE ID = :carID");
$stmt->bindValue(":carID",$idCar, PDO::PARAM_INT);
$stmt->bindValue(":puissance",$carPower, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

$stmt = $bdd->prepare("UPDATE cars SET perf = :perf WHERE ID = :carID");
$stmt->bindValue(":carID",$idCar, PDO::PARAM_INT);
$stmt->bindValue(":perf",$carPerf, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

// $stmt = $bdd->prepare("UPDATE cars SET coverimage = :'image' WHERE ID = :carID");
// $stmt->bindValue(":carID",$idCar, PDO::PARAM_INT);
// $stmt->bindValue(":coverimage",$carCoverImage, PDO::PARAM_STR);
// $result = $stmt->execute();
// $stmt->closeCursor();

if($result) {
    header("Location: ../cars.php"); 
}
 

?>