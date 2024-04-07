<?php
require("conecta.php");

$nome = $_POST['nome'];
$sobrenome =  $_POST['sobrenome'];
$email = $_POST['email'];
$devweb = $_POST['devweb'];
$senioridade = $_POST['senioridade'];
$tecnologia = $_POST['tecnologia'];
$experiencia = $_POST['experiencia'];

$sql = "INSERT INTO dev (nome, sobrenome, email, devweb, senioridade, tecnologia, experiencia)
VALUES ('$nome', '$sobrenome', '$email', '$devweb', '$senioridade', '$tecnologia', '$experiencia')";

if ($conn->query($sql) === TRUE) {
  header("Location: dados_enviados.html");
  exit();
} else {
  echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
}
?>