<?php
// Caminho do banco de dados SQLite
$dbFile = 'banco.db';

try {
    // Conectar ao banco de dados SQLite
    $pdo = new PDO("sqlite:$dbFile");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criar a tabela se não existir
    $sql = "CREATE TABLE IF NOT EXISTS pessoas (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome TEXT NOT NULL,
                categoria TEXT NOT NULL,
                quantidade INTEGER NOT NULL,
                data TEXT NOT NULL
            )";

    $pdo->exec($sql);

    echo "Banco de dados e tabela criados com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao criar banco de dados ou tabela: " . $e->getMessage();
}
?>
