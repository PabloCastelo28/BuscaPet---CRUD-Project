<?php
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'buscapet');
$cpf = $_POST['cpf'];

$sql = "SELECT * FROM adotantes WHERE cpf = '$cpf'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $cliente = $resultado->fetch_assoc();
?>

<form action="salvar_alteracao.php" method="POST">

  <label for="cpf">CPF do Adotante:</label>
  <input type="hidden" id="cpf" name="cpf">

  <label>E-mail atual:</label>
  <input type="email" name="email" value="<?php echo $cliente['email']; ?>">
 
  <label>Senha nova:</label>
  <input type="password" name="senha" value="<?php echo $cliente['senha']; ?>" required>

  <button type="submit">Gravar Alterações</button>
</form>

<?php } else { echo "Adotante não localizado."; } ?>