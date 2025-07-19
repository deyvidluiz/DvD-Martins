<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
    <?php 
        $nomeD = "Deyvid Martins";
        $nome = $_GET["nome"] ?? "Sem nmome";
        $s = $_GET["sobrenome"] ?? "Desconhecido";
        echo"<h1> Sejam Bem Vindos!</h1>";
        echo "<p>Olá eu sou <strong> \"$nomeD\" </strong>É um prazer te conhecer,<strong> \"$nome $s!\" </strong>Este é o meu site!</p>";
        echo"<p><strong>Essas informações abaixo são essenciais para o dia a dia!</strong></p>";
        // var_dump($_GET);
        date_default_timezone_set("America/sao_paulo");
        echo "hoje é dia " . date("d/m");
        echo "<br> A hora atual é ". date("G:i:s ");
        
        ?><script>
        function atualizarRelogio() {
            fetch('relogio.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('relogio').innerHTML = data;
                });
        }

        setInterval(atualizarRelogio, 1000);
    </script>
</body>
    </main>
    <section>
        <h1>Calculadora</h1>
        <form action="cad.php" method="$_GET">
            <input type="number" name="num1" placeholder="Digite o primeiro número" required>
            <input type="number" name="num2" placeholder="Digite o segundo número" required>
            <button type="submit">Calcular</button>
        </form>
       
    <main>
    <?php
        $num1 = $_GET["num1"] ?? "Sem valor";
        $num2 = $_GET["num2"] ?? "Sem valor";
        $soma = $num1 + $num2;
        $multi = $num1 * $num2;
        $Divi = $num1 / $num2;
        $sub = $num1 - $num2;

        echo "<p>A Soma entre os números \"$num1 e $num2\" é: <strong>$soma</strong></p>";
        echo "<p>A Divisão entre os números \"$num1 e $num2\" é: <strong>$Divi</strong></p>";
        echo "<p>A Multiplicação entre os números \"$num1 e $num2\" é: <strong>$multi</strong></p>";
        echo "<p>A Subtração entre os números \"$num1 e $num2\"é: <strong>$sub</strong></p>";
    
    ?>
    <p><a href="index.html">Voltar</a></p>
    </main>
    </section>
</body>
</html>