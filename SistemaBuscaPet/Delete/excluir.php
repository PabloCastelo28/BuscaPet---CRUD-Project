<?php

$cpf = $_POST["cpf"];

$servidor = 'localhost';
$usuario = 'root';
$senha = 'Home@spSENAI2025!';
$banco = 'Treinamento';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Comando para excluir o aluno pelo CPF
$sql = "DELETE FROM adotantes WHERE cpfAluno = ?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param("s", $cpfAluno);

if ($stmt->execute()) {

    if ($stmt->affected_rows > 0) {
        echo "<h2>Aluno excluído com sucesso!</h2>";
        echo "<p>CPF excluído: " . htmlspecialchars($cpfAluno) . "</p>";
    } else {
        echo "<h2>Nenhum aluno encontrado!</h2>";
        echo "<p>Não existe aluno cadastrado com o CPF informado.</p>";
    }

} else {
    echo "Erro ao excluir aluno: " . $stmt->error;
}

$stmt->close();
$conexao->close();

?>