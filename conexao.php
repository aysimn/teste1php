<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "meubanco";

//conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

//verificar conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida!";

?>