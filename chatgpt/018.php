<?php 
    function MaiorMenor($n1, $n2, $n3) {
        $maior = max($n1, $n2, $n3);
        
        $menor = min($n1, $n2, $n3);
        
        return "Maior: $maior e Menor: $menor";
    }

    $resultado = MaiorMenor(10, 5, 8);
    echo $resultado;
?>