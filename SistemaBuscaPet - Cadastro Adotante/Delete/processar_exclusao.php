<?php

$conexao = new mysqli(
    'localhost',
    'root',
    'Home@spSENAI2025!',
    'buscapet'
);

$cpf = $_POST['cpf'];

$sql = "DELETE FROM adotantes WHERE cpf = '$cpf'";

if ($conexao->query($sql)) {
    echo "Adotante excluído com sucesso!";
} else {
    echo "Erro ao excluir o aluno: " . $conexao->error;
}

$conexao->close();

?>