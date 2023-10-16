<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuarios</title>
</head>
<body>
    <form action="cadastra.php" method="post">
        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf"/>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" />
        <label for="nome">Email:</label>
        <input type="text" name="email" id="email" />
        <label for="nome">Senha:</label>
        <input type="password" name="senha" id="senha" />
        <label for="nome">Confirma senha:</label>
        <input type="password" name="confirmasenha" id="confirmasenha" />
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>