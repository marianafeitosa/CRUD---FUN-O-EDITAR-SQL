<?php
define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'cadastro');

try {
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
    $id = (int)$_GET['id'];
    $sqlDeletar = "DELETE FROM dadoscliente WHERE id = $id";
    $deletar = $pdo->prepare($sqlDeletar);
    $deletar->execute();

    echo "Excluído com sucesso!";
} catch (PDOException $ex) {
    echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
}
?>
