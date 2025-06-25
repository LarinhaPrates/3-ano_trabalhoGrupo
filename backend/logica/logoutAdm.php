<?php
session_start();

// Remove apenas os dados do usuário (caso exista algo)
unset($_SESSION['usuario']);  // ou 'usuario_logado', 'admin', etc.

// NÃO remove os sorteados
// $_SESSION['sorteados'] continua intacto

// Redireciona para a página inicial ou de sorteio
header("Location: sorteadoS.php"); // ou qualquer outra
exit();