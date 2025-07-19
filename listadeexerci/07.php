<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete Martins</title>
</head>
<body>
    <h1>Lanchonete Martins!</h1>
    <h4>Seja bem vindo!</h4>
    <h2>Lanches Disponíveis</h2>

    <p>
        Bauru<br>
        <strong>R$ 3,50</strong>
    </p>
    <p>
        Sonho<br>
        <strong>R$ 2,50</strong>
    </p>
    <p>
        Bolo<br>
        <strong>R$ 5,50</strong>
    </p>
    <p>
        Pastel<br>
        <strong>R$ 3,50</strong>
    </p>
    <p>
        Coxa de Frango<br>
        <strong>R$ 6,00</strong>
    </p>
    <p>
        Torta<br>
        <strong>R$ 4,50</strong>
    </p>

    <form action="07.php" method="get">
        <ol>
            <li>Digite 1 para Bauru</li>
            <li>Digite 2 para Sonho</li>
            <li>Digite 3 para Bolo</li>
            <li>Digite 4 para Pastel</li>
            <li>Digite 5 para Coxa de Frango</li>
            <li>Digite 6 para Torta</li>
        </ol>
        <input type="number" name="Lanche" placeholder="Digite o lanche desejado:" required>
        <button type="submit">Calcular valor do lanche</button>
    </form>

    <?php 
        // Só executa se o formulário foi enviado (não na primeira visita)
        if (isset($_GET["Lanche"]) && !empty($_GET["Lanche"])) {
            $op = $_GET["Lanche"];

            if ($op == 1) {
                echo "<p>Lanche escolhido: Bauru, e o valor a pagar é de R$ 3,50</p>";
            } else if ($op == 2) {
                echo "<p>Lanche escolhido: Sonho, e o valor a pagar é de R$ 2,50</p>";
            } else if ($op == 3) {
                echo "<p>Lanche escolhido: Bolo, e o valor a pagar é de R$ 5,50</p>";
            } else if ($op == 4) {
                echo "<p>Lanche escolhido: Pastel, e o valor a pagar é de R$ 3,50</p>";
            } else if ($op == 5) {
                echo "<p>Lanche escolhido: Coxa de Frango, e o valor a pagar é de R$ 6,00</p>";
            } else if ($op == 6) {
                echo "<p>Lanche escolhido: Torta, e o valor a pagar é de R$ 4,50</p>";
            } else if ($op < 1 || $op > 6) {
                echo "<p>Item selecionado inválido!</p>";
                
            }else {

                echo "<p> Digite o valor!</p>";  
            }
        }
    ?>
</body>
</html>