<?php
// Caminho do banco de dados SQLite
$dbFile = 'banco.db';

try {
    // Conectar ao banco de dados SQLite
    $pdo = new PDO("sqlite:$dbFile");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar todos os cadastros
    $stmt = $pdo->query("SELECT * FROM pessoas");
    $pessoas = $stmt->fetchAll();

    echo "<h1>Lista de Pessoas Cadastradas</h1>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Quantidade</th>
                <th>Data</th>
            </tr>";

    foreach ($pessoas as $pessoa) {
        echo "<tr>
                <td>{$pessoa['id']}</td>
                <td>{$pessoa['nome']}</td>
                <td>{$pessoa['categoria']}</td>
                <td>{$pessoa['quantidade']}</td>
                <td>{$pessoa['data']}</td>
              </tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Erro ao consultar o banco de dados: " . $e->getMessage();
}
?>
