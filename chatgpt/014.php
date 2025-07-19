<!DOCTYPE html>
<html>
<head>
    <title>Soma dos Números Pares</title>
</head>
<body>
    <h1>Calculadora de Soma de Números Pares</h1>
    
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero">
        <input type="submit" value="Calcular">
    </form>

    <?php 
    if(isset($_POST['numero'])) {
        $n = $_POST['numero'];
        function Contar($n){
            $soma = 0;
            for($i = 0; $i <= $n; $i++){
                if($i % 2 == 0){
                    $soma += $i;
                }
            }
            echo "A soma dos números pares entre 0 e $n é: $soma";
        }
        Contar($n);
    }
    ?>
</body>
</html>
