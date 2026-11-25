<?php
echo "<h2>Consultar Clientes</h2>";
echo "<form method='GET' action='consultar.php'>";
echo "  <label>Digite o Nome:</label> ";
echo "  <input type='text' name='nome'> ";
echo "  <input type='submit' value='Buscar'>";
echo "</form><hr>";

if (isset($_GET['nome'])) {
    $busca = $_GET['nome'];

    $conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'buscapet');

    $sql = "SELECT * FROM adotantes WHERE nome_usuario LIKE '%$busca%'";

    $resultado = $conexao->query($sql);

    echo "<h3>Resultados Encontrados:</h3>";

    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "ID: " . $linha['id_adotante'] . " <br>  Nome: " . $linha['nome_usuario'] . " <br> CPF: " . $linha['cpf'] . "<br>";
        }
    } 
    
    else {
        echo "Nenhum cliente encontrado.";
    }

    $conexao->close();
}
?>