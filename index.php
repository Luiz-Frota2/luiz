<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>
    <form action="cadastrar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria" required>
            <option value="agricultor">Agricultor</option>
            <option value="indigina">Indígena</option>
            <option value="pescador">Pescador</option>
            <option value="quilombola">Quilombola</option>
            <option value="pessoa juridica">Pessoa Jurídica</option>
            <option value="international">International</option>
        </select><br><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
