<?php
// Defina o caminho para o arquivo de dados
$arquivo_usuarios = 'usuarios.json';
$usuarios = [];

// Tente ler o arquivo.
if (file_exists($arquivo_usuarios)) {
    $usuarios_json = file_get_contents($arquivo_usuarios);
    $usuarios = json_decode($usuarios_json, true);
    if ($usuarios === null) {
        $usuarios = []; // Garante um array vazio se o arquivo estiver corrompido
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <a href="frmusuario.php">Cadastrar Usuario</a>
    <?php if (!empty($usuarios)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nome']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
                <td>
                    <a href="editar_usuario.php?id=<?= htmlspecialchars($usuario['id']) ?>">Editar</a>
                    <a href="excluir_usuario.php?id=<?= htmlspecialchars($usuario['id']) ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p>Nenhum cliente cadastrado ainda.</p>
    <?php endif; ?>
    <br>
    <a href="index.php">Voltar ao Menu Principal</a>
</body>
</html>