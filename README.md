# Sistema de Controle de Estoque

Este é um sistema simples de controle de estoque desenvolvido em PHP, utilizando arquivos JSON para armazenar os dados. Ele permite gerenciar produtos, clientes e usuários sem a necessidade de um banco de dados.

## Funcionalidades

- **Cadastro de Produtos**: Adicione novos produtos ao estoque, informando nome, quantidade e preço.
- **Listagem de Produtos**: Visualize todos os produtos cadastrados, incluindo detalhes como ID, nome, estoque e preço.
- **Cadastro de Clientes**: Registre novos clientes com nome, e-mail e telefone.
- **Listagem de Clientes**: Veja todos os clientes cadastrados, com opções para editar ou excluir.
- **Cadastro de Usuários**: Adicione novos usuários ao sistema, informando nome, e-mail e senha.
- **Listagem de Usuários**: Visualize todos os usuários cadastrados, com opções para editar ou excluir.

## Estrutura do Sistema

O sistema é composto pelos seguintes arquivos principais:

- **`index.php`**: Página inicial com links para as funcionalidades do sistema.
- **Formulários**:
  - `frmproduto.php`: Formulário para cadastro de produtos.
  - `frmcliente.php`: Formulário para cadastro de clientes.
  - `frmusuario.php`: Formulário para cadastro de usuários.
- **Listagens**:
  - `lstproduto.php`: Exibe a lista de produtos cadastrados.
  - `lstcliente.php`: Exibe a lista de clientes cadastrados.
  - `lstusuario.php`: Exibe a lista de usuários cadastrados.
- **Operações**:
  - `operacoes/op_produto.php`: Processa o cadastro de produtos.
  - `operacoes/op_cliente.php`: Processa o cadastro de clientes.
  - `operacoes/op_usuario.php`: Processa o cadastro de usuários.
- **Arquivos de Dados**:
  - `produtos.json`: Armazena os dados dos produtos.
  - `clientes.json`: Armazena os dados dos clientes.
  - `usuarios.json`: Armazena os dados dos usuários.

## Como Usar

1. Clone ou copie os arquivos do sistema para o diretório do seu servidor local (ex.: `htdocs` no XAMPP).
2. Certifique-se de que o servidor Apache está em execução.
3. Acesse o sistema pelo navegador, utilizando o endereço: `http://localhost/phpbase/estoque/`.
4. Utilize os links na página inicial para navegar entre as funcionalidades.

## Requisitos

- PHP 7.4 ou superior.
- Servidor web (ex.: XAMPP, WAMP, ou outro servidor compatível com PHP).

## Observações

- Este sistema é apenas um exemplo educacional e não deve ser usado em produção.
- Para maior segurança e escalabilidade, recomenda-se o uso de um banco de dados como MySQL em sistemas reais.

## Autor

- **Ismael JS**  
  E-mail: ismaeldev96@gmail.com
