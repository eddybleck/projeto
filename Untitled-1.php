<?php
require("conecta.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$devweb = $_POST['devweb'];
$senioridade = $_POST['senioridade'];
// Transformando o array de tecnologia em string para inserção. Ajuste conforme a necessidade do banco.
$tecnologia = isset($_POST['tecnologia']) ? implode(", ", $_POST['tecnologia']) : '';
$experiencia = $_POST['experiencia'];

$stmt = $conn->prepare("INSERT INTO dev (NOME, SOBRENOME, EMAIL, DEVWEB, SENIORIDADE, TECNOLOGIA, EXPERIENCIA) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nome, $sobrenome, $email, $devweb, $senioridade, $tecnologia, $experiencia);

if ($stmt->execute()) {
    echo "<center><h1>Registro Inserido com Sucesso</h1>";
    echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
} else {
    echo "<h3>OCORREU UM ERRO: </h3>: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
