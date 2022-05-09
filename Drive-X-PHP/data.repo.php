<?php


$driverTitle= "Nos Pilotes";
$carTitle= "Nos Véhicules";


// connexion à la BDD et récupération des données pour le READ


require "partials/bdd.php"; 

$req  = $bdd->prepare("SELECT * FROM cars ");  
$req->execute(); 
$cars = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor(); 

$req  = $bdd->prepare("SELECT * FROM drivers ");  
$req->execute(); 
$drivers = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor(); 

// var_dump($drivers);