<?php
// Caminho do banco de dados SQLite
$dbFile = 'banco.db';

try {
    // Conectar ao banco de dados SQLite
    $pdo = new PDO("sqlite:$dbFile");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $quantidade = $_POST['quantidade'];
        $data = $_POST['data'];

        // Inserir os dados no banco de dados
        $stmt = $pdo->prepare("INSERT INTO pessoas (nome, categoria, quantidade, data) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $categoria, $quantidade, $data]);

        echo "Cadastro realizado com sucesso!";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados ou ao cadastrar os dados: " . $e->getMessage();
}
?>
