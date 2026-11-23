<?php

require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $idade = $_POST['idade'] ?? '';

    echo 'Nome: ' . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . '<br>';
    echo 'E-mail: ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '<br>';
    echo 'idade: ' . htmlspecialchars($idade, ENT_QUOTES, 'UTF-8');
}



$sql = "INSERT INTO alunos (nome, email, idade)
        VALUES (:nome, :email, :idade)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':nome' => $nome,
    ':email' => $email,
    ':idade' => $idade
]);

echo "Aluno cadastrado com sucesso!";
?>
<html>
    <body>
        <button onclick="window.location.href='index.html'; return false;">Baixar</button>   
    </body>
</html>