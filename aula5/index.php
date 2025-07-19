<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <header>
        <h1>Bem Vindos!</h1>
    </header>
    <section>
        <form action="fun.php" method="$_POST">
            <label for="Num">Primeiro:</label>
            <input type="number" name="nome" id="idnun1" required>
            <label for="Num">Segundo:</label>
            <input type="number" name="sobrenome" id="idnum2" required>
            <input type="submit" value="Enviar">
            
        </form>
    </section>
    
</body>
</html>
