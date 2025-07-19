<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06.php" method="get">
        <input type="number" name="T" placeholder="Temperatura corporal: ºC" step="0.1" required>
        <button type="submit">Verificar</button>
    </form>
    <?php 
        // Só executa se o formulário foi enviado
        if (isset($_GET["T"])) {
            $temp = $_GET["T"];
            
            if ($temp >= 36 && $temp <= 36.7) {
                echo "<p>Esta na media ideal de temperatura!</p>";
            } else {
                echo "<p>Esta fora da media ideal!</p>";
            }
        }
    ?>
</body>
</html>