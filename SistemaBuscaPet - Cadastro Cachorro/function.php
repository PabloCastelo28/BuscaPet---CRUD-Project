<?php

function listarFuncoes() {
    
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'Home@spSENAI2025!';
    $banco = 'buscapet';
    
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    
    if ($conexao->connect_error) {
        return "<option value=''>Erro ao carregar funções</option>";
    };
    
    $sql = "SELECT id_moradia, tipo_moradia FROM moradias";
    
    $resultado = $conexao->query($sql);
    
    if ($resultado && $resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            
                $options .= "<option value='" . $linha['id_moradia'] . "'>" . $linha['tipo_moradia'] . "</option>";
            }
        } else {
            $options = "<option value=''>Nenhuma função cadastrada</option>";
        }
        $conexao->close();
        return $options;
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Adotantes</title>
</head>
<body>
    
<h2>Cadastro de Adotantes</h2>

<form action="cadastro.php" method="POST">
    
<label for="nome_usuario">Nome do Adotante:</label>
<input type="text" id="nome_usuario" name="nome_usuario" required>

<br>
<br>


    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required>

    <br>
    <br>


    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" required>

    <br>
    <br>


    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" required>

    <br>
    <br>


    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>

    <br>
    <br>


    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required>

    <br>
    <br>


    <label for="id_moradia">Tipo de Moradia:</label>
    <select name="id_moradia" id="id_moradia">casa

      <label for="idfuncao">Função:</label>
      <select id="idfuncao" name="idfuncao" required>
        <option value="">Selecione uma função</option>
        <?php echo listarFuncoes(); ?>
    </select>

    <br>
    <br>


    <button type="submit">Cadastrar Adotante</button>

  </form>
</body>
</html>
