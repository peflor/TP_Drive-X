<?php
// var_dump($_POST);

$idDriver = $_POST['driverID'];

if(gettype($idDriver) =='string') {
    require 'bdd.php';
    $req = "DELETE FROM drivers WHERE ID= :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":id", $idDriver, PDO::PARAM_INT);
    $result = $stmt->execute();
    $stmt->closeCursor();

    if($result) {
        header("Location: ../drivers.php"); 
    }
}