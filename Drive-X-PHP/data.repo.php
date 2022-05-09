<?php


$driverTitle= "Nos Pilotes";
$carTitle= "Nos Véhicules";

// $drivers = [
    
//    [
//       "fullName" => "lewis hamilton",
//       "pays" => "angleterre",
//       "coverImage" => "./assets/img/drivers/lewis.jpg",
//       "category" => "formule 1",
//       "likeIts" => 2
//    ],
//    [
//       "fullName" => "ken block",
//       "pays" => "usa",
//       "coverImage" => "./assets/img/drivers/kenblock.jpg",
//       "category" => "gymkhana",
//       "likeIts" => -2
//    ],
//    [
//       "fullName" => "danica patrick",
//       "pays" => "usa",
//       "coverImage" => "./assets/img/drivers/danicapatrick.jpg",
//       "category" => "nascar",
//       "likeIts" => 0
//    ],
//    [
//       "fullName" => "sebastien loeb",
//       "pays" => "france",
//       "coverImage" => "./assets/img/drivers/Loeb.jpg",
//       "category" => "rallye",
//       "likeIts" => 2
//    ],
//    [
//       "fullName" => "molly taylor",
//       "pays" => "australie",
//       "coverImage" => "./assets/img/drivers/mollytaylor.jpg",
//       "category" => "rallye",
//       "likeIts" => -1
//    ],
//    [
//       "fullName" => "collin mcrae",
//       "pays" => "écosse",
//       "coverImage" => "./assets/img/drivers/colin.jpg",
//       "category" => "rallye",
//       "likeIts" => 0
//    ],
//    [
//       "fullName" => "shirley muldowney",
//       "pays" => "usa",
//       "coverImage" => "./assets/img/drivers/shirleymuldowney.jpg",
//       "category" => "drag",
//       "likeIts" => 0
//    ],
//    [
//       "fullName" => "michael schumacher",
//       "pays" => "allemagne",
//       "coverImage" => "./assets/img/drivers/schumacher.jpg",
//       "category" => "formule 1",
//       "likeIts" => 0
//    ],
//    [
//       "fullName" => "erica enders",
//       "pays" => "usa",
//       "coverImage" => "./assets/img/drivers/ericaenders.jpg",
//       "category" => "drag",
//       "likeIts" => 0
//    ],
// ];

//   $cars = [
//    [
//       "name" => "pagani huayra",
//       "pays" => "italie",
//       "coverImage" =>"./assets/img/cars/pagani.jpg",
//       "power" => 765,
//       "perf" => 3.2
//    ],
//    [
//       "name" => "koenigsegg agera rs",
//       "pays" => "suède",
//       "coverImage" =>"./assets/img/cars/koenigsegg.jpg",
//       "power" => 1383,
//       "perf" => 2.6

//    ],
//    [
//       "name" => "zenvo tsr s",
//       "pays" => "danemark",
//       "coverImage" =>"./assets/img/cars/zenvo.jpg",
//       "power" => 1200,
//       "perf" => 2.8
//    ],
//    [
//       "name" => "bugatti chiron",
//       "pays" => "france",
//       "coverImage" =>"./assets/img/cars/bugatti.jpg",
//       "power" => 1500,
//       "perf" => 2.4
//    ],
//    [
//       "name" => "mercedes amg one",
//       "pays" => "allemagne",
//       "coverImage" =>"./assets/img/cars/mercedes.jpg",
//       "power" => 1000,
//       "perf" => 2.2
//    ],
//    [
//       "name" => "ferrari sf90",
//       "pays" => "italie",
//       "coverImage" =>"./assets/img/cars/ferrari.jpg",
//       "power" => 1000,
//       "perf" => 2.5
//    ]
//   ];

// connexion à la BDD et récupération des donéées pour le READ


require "partials/bdd.php"; 

$req  = $bdd->prepare("SELECT * FROM cars ");  
$req->execute(); 
$cars = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor(); 

$req  = $bdd->prepare("SELECT * FROM drivers ");  
$req->execute(); 
$drivers = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor(); 
var_dump($drivers);