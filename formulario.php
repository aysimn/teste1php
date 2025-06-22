
<!DOCTYPE htlm>
<htlm lang="pt-br">
<head>
    <meta charset="UTF-8>
    <title>Cadastro de usuários</title>"
</head>
<body>
    <h2>Cadastro de usuários</h2>
    <form action="inserir.php" method="POST";
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" maxlenght="11" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>



