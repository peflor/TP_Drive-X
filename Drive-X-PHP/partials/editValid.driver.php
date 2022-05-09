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


if($result) {
    header("Location: ../drivers.php"); 
}
 

?>