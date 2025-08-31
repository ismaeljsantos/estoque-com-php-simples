<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Simulador de banco de dados
    $arquivo_usuarios = '../usuarios.json';

    // Tente ler o conteúdo do arquivo. Se não existir, crie um array vazio.
    $usuarios_json = file_get_contents($arquivo_usuarios);
    $usuarios = json_decode($usuarios_json, true);

    if ($usuarios === null) {
        $usuarios = []; // Garante que é um array se o arquivo estiver vazio ou corrompido
    }

    // Crie um novo usuario
    $novo_usuario = [
        'id' => count($usuarios) + 1,
        'nome' => $nome,
        'email' => $email,
        'senha' => $senha
    ];

    // Adicione o novo usuario ao array existente
    $usuarios[] = $novo_usuario;

    // Converta o array de volta para JSON e salve no arquivo
    file_put_contents($arquivo_usuarios, json_encode($usuarios, JSON_PRETTY_PRINT));
    
    echo "<h1>Dados do Usuario</h1>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Senha: " . htmlspecialchars($senha) . "<br>";
    echo "<br><a href='../index.php'>Voltar</a>";
}
