<?php

$nome_usuario = $_POST["nome_usuario"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha_user = $_POST["senha"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$tipo_moradia = $_POST["tipo_moradia"];
$tipo_quintal = $_POST["tipo_quintal"];

$servidor = 'localhost';
$usuario = 'root';
$senha = 'Home@spSENAI2025!';
$banco = 'buscapet';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$sql = "INSERT INTO adotantes 
(nome_usuario, cpf, email, senha, endereco, telefone, id_moradia, id_quintal) 
VALUES 
('$nome_usuario', '$cpf', '$email', '$senha_user', '$endereco', '$telefone', '$tipo_moradia', '$tipo_quintal')";

if($conexao->query($sql) === TRUE) {
    echo "<h2>Adotante cadastrado com sucesso!</h2>";
    echo "<p>Dados registrados:</p>";
    echo "Nome do Adotante: " . $nome_usuario . "<br>";
    echo "CPF: " . $cpf . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Senha: " . $senha_user . "<br>";
    echo "Endereço: " . $endereco . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "ID do tipo de moradia: " . $tipo_moradia . "<br>";
    echo "ID do tipo de quintal: " . $tipo_quintal . "<br>";
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
?>

