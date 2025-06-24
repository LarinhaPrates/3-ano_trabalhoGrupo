<?php
session_start(); // Inicia a sessão

// Destroi todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

// Redireciona para a página de login ou inicial
header("Location: ../../index.php");
exit;
?>