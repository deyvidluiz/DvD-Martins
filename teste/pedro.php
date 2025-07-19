<?php
session_start();

// Usuários cadastrados (em produção, use banco de dados!)
$usuarios = [
    'admin' => '1234',
    'user' => 'abcd'
];

// Inicializa tarefas na sessão
if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

// Função para exibir mensagens
function mensagem($msg, $tipo = 'info') {
    echo "<div style='padding:10px;margin:10px 0;color:#fff;background:" . 
        ($tipo == 'erro' ? '#c00' : ($tipo == 'sucesso' ? '#080' : '#0074d9')) . 
        ";border-radius:5px;'>$msg</div>";
}

// Login
if (isset($_POST['login'])) {
    $user = $_POST['usuario'] ?? '';
    $pass = $_POST['senha'] ?? '';
    if (isset($usuarios[$user]) && $usuarios[$user] === $pass) {
        $_SESSION['logado'] = $user;
        mensagem("Bem-vindo, $user!", 'sucesso');
    } else {
        mensagem("Usuário ou senha inválidos!", 'erro');
    }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: pedro.php");
    exit;
}

// Adicionar tarefa
if (isset($_POST['add_tarefa']) && isset($_SESSION['logado'])) {
    $titulo = trim($_POST['titulo'] ?? '');
    $desc = trim($_POST['descricao'] ?? '');
    if ($titulo) {
        $_SESSION['tarefas'][] = [
            'titulo' => $titulo,
            'descricao' => $desc,
            'status' => 'pendente',
            'criado_em' => date('d/m/Y H:i')
        ];
        mensagem("Tarefa adicionada!", 'sucesso');
    } else {
        mensagem("Título é obrigatório!", 'erro');
    }
}

// Remover tarefa
if (isset($_GET['remover']) && isset($_SESSION['logado'])) {
    $id = (int)$_GET['remover'];
    if (isset($_SESSION['tarefas'][$id])) {
        unset($_SESSION['tarefas'][$id]);
        $_SESSION['tarefas'] = array_values($_SESSION['tarefas']);
        mensagem("Tarefa removida!", 'sucesso');
    }
}

// Marcar como concluída
if (isset($_GET['concluir']) && isset($_SESSION['logado'])) {
    $id = (int)$_GET['concluir'];
    if (isset($_SESSION['tarefas'][$id])) {
        $_SESSION['tarefas'][$id]['status'] = 'concluída';
        mensagem("Tarefa concluída!", 'sucesso');
    }
}

// Editar tarefa
if (isset($_POST['editar_tarefa']) && isset($_SESSION['logado'])) {
    $id = (int)$_POST['id'];
    $titulo = trim($_POST['titulo'] ?? '');
    $desc = trim($_POST['descricao'] ?? '');
    if ($titulo && isset($_SESSION['tarefas'][$id])) {
        $_SESSION['tarefas'][$id]['titulo'] = $titulo;
        $_SESSION['tarefas'][$id]['descricao'] = $desc;
        mensagem("Tarefa editada!", 'sucesso');
    } else {
        mensagem("Erro ao editar tarefa!", 'erro');
    }
}

// HTML
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 700px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        h1 { color: #0074d9; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border-bottom: 1px solid #eee; }
        th { background: #0074d9; color: #fff; }
        tr:nth-child(even) { background: #f9f9f9; }
        .btn { padding: 6px 12px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-add { background: #0074d9; color: #fff; }
        .btn-edit { background: #ffb700; color: #fff; }
        .btn-del { background: #c00; color: #fff; }
        .btn-ok { background: #080; color: #fff; }
        .logout { float: right; }
        .status-pendente { color: #c00; }
        .status-concluída { color: #080; }
        form { margin: 0; }
    </style>
</head>
<body>
<div class="container">
    <h1>Gerenciador de Tarefas</h1>
    <?php if (!isset($_SESSION['logado'])): ?>
        <form method="post">
            <label>Usuário: <input type="text" name="usuario" required></label><br><br>
            <label>Senha: <input type="password" name="senha" required></label><br><br>
            <button class="btn btn-add" type="submit" name="login">Entrar</button>
        </form>
    <?php else: ?>
        <div class="logout">
            Logado como <b><?=htmlspecialchars($_SESSION['logado'])?></b> | 
            <a href="?logout=1" class="btn btn-del">Sair</a>
        </div>
        <h2>Adicionar Nova Tarefa</h2>
        <form method="post">
            <input type="text" name="titulo" placeholder="Título da tarefa" required>
            <input type="text" name="descricao" placeholder="Descrição (opcional)">
            <button class="btn btn-add" type="submit" name="add_tarefa">Adicionar</button>
        </form>
        <h2>Minhas Tarefas</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($_SESSION['tarefas'] as $i => $tarefa): ?>
                <tr>
                    <td><?=$i+1?></td>
                    <td>
                        <?php if (isset($_GET['editar']) && $_GET['editar'] == $i): ?>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?=$i?>">
                                <input type="text" name="titulo" value="<?=htmlspecialchars($tarefa['titulo'])?>" required>
                        <?php else: ?>
                            <?=htmlspecialchars($tarefa['titulo'])?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (isset($_GET['editar']) && $_GET['editar'] == $i): ?>
                            <input type="text" name="descricao" value="<?=htmlspecialchars($tarefa['descricao'])?>">
                        <?php else: ?>
                            <?=htmlspecialchars($tarefa['descricao'])?>
                        <?php endif; ?>
                    </td>
                    <td class="status-<?=$tarefa['status']?>"><?=ucfirst($tarefa['status'])?></td>
                    <td><?=$tarefa['criado_em']?></td>
                    <td>
                        <?php if (isset($_GET['editar']) && $_GET['editar'] == $i): ?>
                            <button class="btn btn-ok" type="submit" name="editar_tarefa">Salvar</button>
                            </form>
                            <a class="btn btn-del" href="pedro.php">Cancelar</a>
                        <?php else: ?>
                            <?php if ($tarefa['status'] == 'pendente'): ?>
                                <a class="btn btn-ok" href="?concluir=<?=$i?>">Concluir</a>
                            <?php endif; ?>
                            <a class="btn btn-edit" href="?editar=<?=$i?>">Editar</a>
                            <a class="btn btn-del" href="?remover=<?=$i?>" onclick="return confirm('Remover tarefa?')">Remover</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($_SESSION['tarefas'])): ?>
                <tr><td colspan="6">Nenhuma tarefa cadastrada.</td></tr>
            <?php endif; ?>
        </table>
    <?php endif; ?>
</div>
</body>
</html>