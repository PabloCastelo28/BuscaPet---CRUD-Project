<?php
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'treinamento');
$cpf = $_POST['cpfAluno'];

$sql = "SELECT * FROM alunos WHERE cpfAluno = '$cpf'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $cliente = $resultado->fetch_assoc();
?>

<form action="salvar_alteracao.php" method="POST">
  <input type="hidden" name="cpfAluno" value="<?php echo $cliente['cpfAluno']; ?>">

  <label>Nome Atual:</label>
  <input type="text" name="nomeAluno" value="<?php echo $cliente['nomeAluno']; ?>" required>

  <label>Nota Final:</label>
  <input type="number" name="notaFinal" value="<?php echo $cliente['notaFinal']; ?>" required>

  <button type="submit">Gravar Alterações</button>
</form>

<?php } else { echo "Cliente não localizado."; } ?>