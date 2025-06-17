<?php 
session_start(); // Inicia a sessão
include_once('../data/data.php'); // Arquivo de conexão com o banco

$email = $_POST["email"];

$mensagem = "Seu email: $email";
echo $mensagem;

?>