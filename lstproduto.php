<?php
// Defina o caminho para o arquivo de dados
$arquivo_produtos = 'produtos.json';
$produtos = [];

// Tente ler o arquivo.
if (file_exists($arquivo_produtos)) {
    $produtos_json = file_get_contents($arquivo_produtos);
    $produtos = json_decode($produtos_json, true);
    if ($produtos === null) {
        $produtos = []; // Garante um array vazio se o arquivo estiver corrompido
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    <a href="frmproduto.php">Cadastrar Produto</a>
    <?php if (!empty($produtos)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= htmlspecialchars($produto['id']) ?></td>
                <td><?= htmlspecialchars($produto['nome']) ?></td>
                <td><?= htmlspecialchars($produto['estoque']) ?></td>
                <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p>Nenhum produto cadastrado ainda.</p>
    <?php endif; ?>
    <br>
    <a href="index.php">Voltar ao Menu Principal</a>
</body>
</html>