<?php 
function poditNegat($n1){
    if($n1 > 0){
        echo"positivo";
    }elseif($n1 < 0){
        echo"negativo";
    }
    else{
        echo"igual a zero!";
    }
}
poditNegat(9)
?>