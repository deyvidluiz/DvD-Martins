<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área</title>
</head>
<body>
    <main>
        <form action="15.php" method="get">
            <input type="number" name="B" placeholder="Digite a ALTURA" step="any" required>
            <input type="number" name="A" placeholder="Digite a BASE" step="any" required>
            <button type="submit">Calcular</button>
        </form>
    </main>
    <?php 
        $B = $_GET["B"] ?? null;
        $A = $_GET["A"] ?? null;

        if ($B !== null && $A !== null) {
            $area = $B * $A;
            echo "<p>Área: $area</p>";
        }
    ?>
</body>
</html>