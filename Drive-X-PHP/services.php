<?php

function carPowerSwitch($power){

    switch($power){
    case $power<1000 :
        echo "<span class='badge badge-danger'>" . $power . " CH</span>";
    break; 
    
    case $power>=1000 && $power<=1200 :
        echo "<span class='badge badge-warning'>" . $power . " CH</span>";
    break; 
    
    case $power>1200 :
        echo "<span class='badge badge-success'>" . $power . " CH</span>";
    break; 
    }
}
function driverCategorySwitch ($category){

     switch($category){
        case $category=='Formule 1': 
        echo "<span class='badge badge-success'>" . $category . "</span>";
        break; 
        case $category=='Gymkhana': 
        echo "<span class='badge badge-primary'>" . $category . "</span>";
        break; 
        case $category=='Drag': 
        echo "<span class='badge badge-info'>" . $category . "</span>";
        break; 
        case $category=='Rallye': 
        echo "<span class='badge badge-danger'>" . $category . "</span>";
        break; 
        case $category=='Nascar': 
        echo "<span class='badge badge-warning'>" . $category . "</span>";
        break; 
    }  
}
$driversTri = $drivers;
usort($driversTri, function($x, $y) {
    return $y['likeits'] - $x['likeits'];
});

$carsTri = $cars;
usort($carsTri, function($x, $y){
    return $y['puissance'] - $x['puissance'];
});

