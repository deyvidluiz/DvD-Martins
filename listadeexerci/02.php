<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Converter de ºC para fahrenheit</h3>
    <form action="02.php" method="$_GET">
        <input type="number" name="C" placeholder="Tempratura em ºC:" required>
         <button type="submit">converter</button>
    </form>
    <?php 
        $C = $_GET["C"] ?? "sem valor";
        
        $F = (9 * $C + 160) / 5;

        echo"Em fahrenheit $F";
    
    ?>
    
</body>
</html>