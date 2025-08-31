<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    // Simulador de banco de dados
    $arquivo_clientes = '../clientes.json';

    // Tente ler o conteúdo do arquivo. Se não existir, crie um array vazio.
    $clientes_json = file_get_contents($arquivo_clientes);
    $clientes = json_decode($clientes_json, true);

    if ($clientes === null) {
        $clientes = []; // Garante que é um array se o arquivo estiver vazio ou corrompido
    }

    // Crie um novo cliente
    $novo_cliente = [
        'id' => count($clientes) + 1,
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone
    ];

    // Adicione o novo cliente ao array existente
    $clientes[] = $novo_cliente;

    // Converta o array de volta para JSON e salve no arquivo
    file_put_contents($arquivo_clientes, json_encode($clientes, JSON_PRETTY_PRINT));
    echo "<h1>Dados do Cliente</h1>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Telefone: " . htmlspecialchars($telefone) . "<br>";
    echo "<br><a href='../index.php'>Voltar</a>";
}
