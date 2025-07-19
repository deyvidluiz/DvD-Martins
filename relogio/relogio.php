<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relógio</title>
    <link rel="stylesheet" href="est.css">
</head>
<body>
    <div id="relogio">
        <?php 
        function relogio(){
            date_default_timezone_set("America/sao_paulo");
            echo "Hoje é dia " . date("d/m");
            echo "<br> A hora atual é ". date("G:i:s ");
        }
        relogio();
        ?>
    </div>

    <script>
        function atualizarRelogio() {
            fetch('relogio.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('relogio').innerHTML = data;
                });
        }

        // Atualiza a cada segundo
        setInterval(atualizarRelogio, 1000);
    </script>
</body>
</html>