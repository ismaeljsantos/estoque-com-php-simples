<?php
// Defina o caminho para o arquivo de dados
$arquivo_clientes = 'clientes.json';
$clientes = [];

// Tente ler o arquivo.
if (file_exists($arquivo_clientes)) {
    $clientes_json = file_get_contents($arquivo_clientes);
    $clientes = json_decode($clientes_json, true);
    if ($clientes === null) {
        $clientes = []; // Garante um array vazio se o arquivo estiver corrompido
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
    <a href="frmcliente.php">Cadastrar Cliente</a>
    <?php if (!empty($clientes)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= htmlspecialchars($cliente['id']) ?></td>
                <td><?= htmlspecialchars($cliente['nome']) ?></td>
                <td><?= htmlspecialchars($cliente['email']) ?></td>
                <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                <td>
                    <a href="editar_cliente.php?id=<?= htmlspecialchars($cliente['id']) ?>">Editar</a>
                    <a href="excluir_cliente.php?id=<?= htmlspecialchars($cliente['id']) ?>">Excluir</a>
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