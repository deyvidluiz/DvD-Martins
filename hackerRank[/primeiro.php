<?php 
function solveMefist($a,$b){
    return $a + $b;
}
$hamdle = fopen("php://stdin", "r");
$_a = fgets($hamdle);
$_b = fgets($hamdle);

$soma = solveMefist((int)$_a, (int)$_b);
echo"$soma";

fclose($hamdle);

?>