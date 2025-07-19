<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Conexão com o banco de dados
    $mysqli = new mysqli("localhost", "root", "", "sistema_de_login");

    if ($mysqli->connect_errno) {
        die("Falha na conexão: " . $mysqli->connect_error);
    }
    session_start();
    $erro = [];
    if (isset($_POST['email']) && strlen($_POST['senha']) > 0) {
        $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
        $_SESSION['senha'] = $_POST['senha']; // Senha em texto puro
        $sql_code = "SELECT senha, email, codigo FROM usuario WHERE email = '{$_SESSION['email']}'";
        $sql_query = $mysqli->query($sql_code);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        if ($total == 0) {
            $erro[] = "Email ou senha incorretos";
        } else {
            if ($dado['senha'] == $_SESSION['senha']) {
                $_SESSION['usuario'] = $dado['codigo'];
                echo "<script>alert('login efetuado com sucesso');location.href='sucesso.php';</script>";
                exit;
            } else {
                $erro[] = "Email ou senha incorretos";
            }
        }
    }
?>
<?php 
if (count($erro) > 0) {
    foreach ($erro as $e) {
        echo $e . '<br>';
    }
}
?>
<form action="" method="post">
    <p><input value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" type="text" name="email" placeholder="Email"> </p>
    <p><input type="password" name="senha"> </p>
    <p><a href="">Esqueceu sua senha?</a> </p>
    <p><button type="submit">Entrar</button> </p>
</form>
</body>
</html>