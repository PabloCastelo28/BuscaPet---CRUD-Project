<?php

// echo "<h2>Consultar Clientes</h2>";
// echo "<form method='GET' action='salvar_alteracao.php'>";

// echo "  <label>Digite o novo nome:</label> ";
// echo "  <input type='text' name='nomeAluno'> ";

// echo "<br>";

// echo "  <label>Digite o novo endereço:</label> ";
// echo "  <input type='text' name='enderecoAluno'> ";

// echo "<br>";

// echo "  <label>Digite o novo CPF:</label> ";
// echo "  <input type='text' name='cpfAluno'> ";

// echo "<br>";

// echo "  <input type='submit' value='Alterar'>";

// echo "</form><hr>";

$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'Treinamento');

$cpf = $_POST['cpfAluno'];
$novo_nome = $_POST['nomeAluno'];
$nova_nota = $_POST['notaFinal'];

$sql_update = "UPDATE alunos SET nomeAluno = '$novo_nome', notaFinal = '$nova_nota' WHERE cpfAluno = '$cpf'";

if ($conexao->query($sql_update) === TRUE) {
    echo "<h2 style='color:#16a34a;'>Dados Atualizados com Sucesso!</h2>";
    echo "<p><strong>Cadastro Final no Banco:</strong></p>";
    echo "CPF: " . $cpf . "<br>";
    echo "Nome: " . $novo_nome . "<br>";
    echo "Nova Nota: " . $nova_nota . "<br>";
} else {
    echo "Erro ao atualizar: " . $conexao->error;
}
$conexao->close();
?>