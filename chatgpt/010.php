<?php 
function NumPrimo($n){

    if($n > 1){
        for($i = 2; $i < $n; $i++){
            if($n % $i == 0){
                return false;
            }
        }
        return true;
    }else{
        return false;
    }
}
?>