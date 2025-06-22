<?php

//conectando ao banco
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO usuarios (nome, email, cpf) VALUES (?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $cpf);

if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
