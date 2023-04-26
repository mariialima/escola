<?php
include("conecta.php");
$nome = $_POST["nome"];
$idade = $_POST["idade"];

$comando = $pdo->prepare("INSERT INTO alunos(nome,idade) VALUES('$nome',$idade)");
$resultado = $comando->execute();

//para voltar no formulário//
header("Location: cadastro.html");

?>