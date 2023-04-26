<?php
include("conecta.php");
$matricula = $_POST["matricula"];

$comando = $pdo->prepare("DELETE FROM alunos WHERE matricula = $matricula");
$resultado = $comando->execute();

//para voltar no formulário//
header("Location: cadastro.html");

?>