<?php 
    function simpleArraySum($ar){
        return array_sum($ar);
    }

    $handle = fopen("php://stdin", "r");
    $n = (int)fgets($handle);
    $line = fgets($handle);

    $ar = array_map('intval', explode("", $line));

    $result = simpleArraySum($ar);
    
    echo"$result";
    fclose($handle);
?>