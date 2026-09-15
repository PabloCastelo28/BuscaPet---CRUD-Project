<?php
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'buscapet');
$cpf = $_POST['cpf'];

$sql = "SELECT * FROM adotantes WHERE cpf = '$cpf'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $cliente = $resultado->fetch_assoc();
?>

<form action="salvar_alteracao.php" method="POST">
  <input type="email" name="email" value="<?php echo $cliente['email']; ?>">
  <label>E-mail atual:</label>
 
  <label>Senha atual:</label>
  <input type="number" name="senha" value="<?php echo $cliente['senha']; ?>" required>

  <label>Endereço atual:</label>
  <input type="text" name="endereco" value="<?php echo $cliente['endereco']; ?>" required>

  <label>Tipo de moradia atual:</label>
  <input type="text" name="tipo_Moradia" value="<?php echo $cliente['tipo_Moradia']; ?>" required>

  <button type="submit">Gravar Alterações</button>
</form>

<?php } else { echo "Adotante não localizado."; } ?>