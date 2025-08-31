<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $estoque = $_POST["estoque"];
    $preco = $_POST["preco"];

    // 1. Defina o caminho para o arquivo de dados
    $arquivo_produtos = '../produtos.json';

    // 2. Tente ler o conteúdo do arquivo. Se não existir, crie um array vazio.
    $produtos_json = file_get_contents($arquivo_produtos);
    $produtos = json_decode($produtos_json, true);

    if ($produtos === null) {
        $produtos = []; // Garante que é um array se o arquivo estiver vazio ou corrompido
    }

    // 3. Crie um novo produto (com um ID simples para exemplo)
    $novo_produto = [
        'id' => count($produtos) + 1, // ID simples (não ideal para produção, mas funciona para aprendizado)
        'nome' => $nome,
        'estoque' => (int)$estoque,
        'preco' => (float)str_replace(',', '.', $preco) // Converte vírgula para ponto e para float
    ];

    // 4. Adicione o novo produto ao array existente
    $produtos[] = $novo_produto;

    // 5. Converta o array de volta para JSON e salve no arquivo
    file_put_contents($arquivo_produtos, json_encode($produtos, JSON_PRETTY_PRINT));

    echo "<h1>Dados do Produto</h1>";
    echo "Produto: " . htmlspecialchars($nome) . "<br>";
    echo "Estoque: " . htmlspecialchars($estoque) . "<br>";
    echo "Preço: " . htmlspecialchars($preco) . "<br><br>";
    echo "Cadastro realizado com sucesso!<br>";
    echo "<br><a href='../lstproduto.php'>Ver Listagem de Produtos</a>";
    echo "<br><a href='../index.php'>Voltar ao Menu Principal</a>";
} else {
    echo "Método de requisição inválido.";
}
?>