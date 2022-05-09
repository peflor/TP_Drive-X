<?php
var_dump($_POST);

$idCar = $_POST['carID'];

if(gettype($idCar) =='string') {
    require 'bdd.php';
    $req = "DELETE FROM cars WHERE ID= :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":id", $idCar, PDO::PARAM_INT);
    $result = $stmt->execute();
    $stmt->closeCursor();

    if($result) {
        header("Location: ../cars.php"); 
    }
}