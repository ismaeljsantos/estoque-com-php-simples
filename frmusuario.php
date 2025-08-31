<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Cadastro de Usuario</title>
</head>
<body>
    <h1>Cadastro de Usuario</h1>
    <form action="./operacoes/op_usuario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Voltar ao Menu Principal</a>
</body>
</html>