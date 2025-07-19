<?php 
function Simuiladorsenha($senha) {

    for ($i=0; $i < 3 ; $i++) { 
        if ($senha <> 1234) {
            Echo"Acesso negado";
        }else {
            echo"Acesso permitido";
        }
    }
    
}
?>