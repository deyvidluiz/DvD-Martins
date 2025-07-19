<?php 
        function ValordoDesconto($n){
            if ($n <= 100) {
                $desc = $n * 0.05;
                return $n - $desc;
            }
            if ($n > 100 && $n <= 500) {
                $desc = $n * 0.10;
                return $n - $desc;
            }
            if ($n > 500) {
                $desc = $n * 0.15;
                return $n - $desc;
            }
        }
    
    ?>