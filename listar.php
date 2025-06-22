<?php
include("conexao.php");

// Consulta para obter os usuários
$sql = "SELECT nome, email, cpf FROM usuarios";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
<h2>Usuários Cadastrados</h2>

<?php if ($resultado->num_rows > 0): ?>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($linha = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($linha['nome']) ?></td>
                <td><?= htmlspecialchars($linha['email']) ?></td>
                <td><?= htmlspecialchars($linha['cpf']) ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Nenhum usuário encontrado.</p>
<?php endif; ?>

<?php $conexao->close(); ?>
</body>
</html>
