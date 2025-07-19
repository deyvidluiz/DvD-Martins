<?php 
    function MediaAluno($n4, $m4){
        $media = ($n4 + $m4) / 2;
        
        if($media >= 7){
        echo"Aprovado";
    }else{
        echo"reprovado";
    }
    }

?>