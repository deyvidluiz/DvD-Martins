<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste php</h1>
    <?php 
    date_default_timezone_set("America/sao_paulo");
    echo "hoje é dia " . date("d/m");
    echo "<br> A hora atual é ". date("G:i:s T")
    ?>
    
</body>
</html>
