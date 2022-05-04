<?php

function carPowerSwitch($power){

    switch($power){
    case $power<1000 :
        echo "<p>Puissance: <span class='badge badge-danger'>" . $power . " CH</span></p>";
    break; 
    
    case $power>=1000 && $power<=1200 :
        echo "<p>Puissance: <span class='badge badge-warning'>" . $power . " CH</span></p>";
    break; 
    
    case $power>1200 :
        echo "<p>Puissance: <span class='badge badge-success'>" . $power . " CH</span></p>";
    break; 
    }
}
function driverCategorySwitch ($category){

     switch($category){
        case $category=='formule 1': 
        echo "<p>Discipline: <span class='badge badge-success'>" . $category . "</span></p>";
        break; 
        case $category=='gymkhana': 
        echo "<p>Discipline: <span class='badge badge-primary'>" . $category . "</span></p>";
        break; 
        case $category=='drag': 
        echo "<p>Discipline: <span class='badge badge-info'>" . $category . "</span></p>";
        break; 
        case $category=='rallye': 
        echo "<p>Discipline: <span class='badge badge-danger'>" . $category . "</span></p>";
        break; 
        case $category=='nascar': 
        echo "<p>Discipline: <span class='badge badge-warning'>" . $category . "</span></p>";
        break; 
    }  
}



















