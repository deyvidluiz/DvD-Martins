<?php 
function MaiorMenorIdade($id){
    if ($id < 18 ) {
        $falt = 18 - $id;
        echo"você ainda é menor e falta $falt anos para completar 18";
    }else{

        echo"Maior de idade";
    }
}

 MaiorMenorIdade(12);

?>