<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
    <?php 
    $nome = "dvd";
    $sobrenome = "martins";
    const PAIS = "brasil";
    $IDADE = 16;
    $PESO = 75;
    $CASADO = "sou";

    if ($CASADO == "nao"){
        echo"muito prazer, $nome $sobrenome! você tem $IDADE anos pesa $PESO kg não é casado e  mora no " . PAIS ;
        
    }elseif ($CASADO == "sim") {
        echo"muito prazer, $nome $sobrenome! você tem $IDADE anos pesa $PESO kg é casado e  mora no " . PAIS ;
    }else {
        echo"digitamento invalido na variavel casado!";
    }
    ?>
</body>
</html>
