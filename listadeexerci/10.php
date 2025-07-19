<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Idades</title>
</head>
<body>
    <h2>Digite as idades separadas por vírgula</h2>

    <form method="POST">
        <label>Exemplo: 15,22,67,12,75,0</label><br>
        <input type="text" name="lista_idades" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['lista_idades'];
        $idades = explode(',', $texto); // separa por vírgula

        $menores = 0;
        $idosos = 0;

        for ($i = 0; $i < count($idades); $i++) {
            $idade = (int)trim($idades[$i]);

            if ($idade < 1) {
                break; // para quando encontrar idade menor que 1
            }

            if ($idade < 18) {
                $menores++;
            }

            if ($idade > 65) {
                $idosos++;
            }
        }

        echo "<hr>";
        echo "<p>Total de pessoas com menos de 18 anos: <strong>$menores</strong></p>";
        echo "<p>Total de pessoas com mais de 65 anos: <strong>$idosos</strong></p>";
    }
    ?>
</body>
</html>