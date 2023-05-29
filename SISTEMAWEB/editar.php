<?php
define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'cadastro');

try {
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
} catch (PDOException $ex) {
    echo "Erro ao tentar fazer a conexão com o MySQL: " . $ex->getMessage();
}


if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    
    $sql = "SELECT * FROM dadoscliente WHERE id = $id";
    $stmt = $pdo->query($sql);
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    
    if (!$registro) {
        echo "Registro não encontrado.";
        exit;
    }
} else {
    echo "ID do registro não informado.";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os novos valores dos campos
    $nome = $_POST['nome'] ?? "";
    $telefone = $_POST['telefone'] ?? "";
    $origem = $_POST['origem'] ?? "";
    $dataContato = $_POST['dataContato'] ?? "";
    $observacao = $_POST['observacao'] ?? "";

    
    $sqlUpdate = "UPDATE dadoscliente SET nome = :nome, telefone = :telefone, origem = :origem, dataContato = :dataContato, observacao = :observacao WHERE id = :id";
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    $stmtUpdate->bindValue(':nome', $nome);
    $stmtUpdate->bindValue(':telefone', $telefone);
    $stmtUpdate->bindValue(':origem', $origem);
    $stmtUpdate->bindValue(':dataContato', $dataContato);
    $stmtUpdate->bindValue(':observacao', $observacao);
    $stmtUpdate->bindValue(':id', $id);
    $stmtUpdate->execute();

    echo "Registro atualizado com sucesso!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .col-11 {
            margin: 0 1rem;
        }
    </style>
</head>
<body style="background-color: grey;">
    <div class="container" style="background-color: white; padding: 0;">
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" style="color: white;">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consulta.php" style="color: white;">Consultar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col descricao">
                <h2><font face="Times">Edição de Dados</font> <br /></h2>
            </div>
        </div>
    <form method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $registro['nome']; ?>">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $registro['telefone']; ?>">
        </div>
        <div class="mb-3">
            <label for="origem" class="form-label">Origem:</label>
            <input type="text" class="form-control" id="origem" name="origem" value="<?php echo $registro['origem']; ?>">
        </div>
        <div class="mb-3">
            <label for="dataContato" class="form-label">Data de Contato:</label>
            <input type="text" class="form-control" id="dataContato" name="dataContato" value="<?php echo $registro['dataContato']; ?>">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação:</label>
            <textarea class="form-control" id="observacao" name="observacao"><?php echo $registro['observacao']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
</body>
</html>


