<?php
$dbNome = 'grupo02';
$dbHost = 'localhost';
$dbUsuario = 'root';
$dbSenha = '';

try {
    $conexao = new PDO("mysql:host=$dbHost;dbname=$dbNome;charset=utf8", $dbUsuario, $dbSenha);
    // Definindo o modo de erro do PDO para exceção
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
