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




















