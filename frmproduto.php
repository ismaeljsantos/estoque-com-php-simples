<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <a href="frmproduto.php">Cadastrar Produto</a>
    <form action="./operacoes/op_produto.php" method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="estoque">Estoque:</label>
        <input type="number" id="estoque" name="estoque" required>
        <br>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="lstproduto.php">Voltar ao Menu Principal</a>
</body>
</html>