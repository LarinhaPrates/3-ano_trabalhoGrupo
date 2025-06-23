<?php
session_start();
include_once('../data/data.php');

$quantidade = 3;

$sql = "SELECT id FROM formularios";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$participantes = $stmt->fetchAll(PDO::FETCH_COLUMN);

if (count($participantes) < $quantidade) {
    die("Não há participantes suficientes.");
}

shuffle($participantes);
$sorteados = array_slice($participantes, 0, $quantidade);

// Guarda na sessão para a página mostrar depois
$_SESSION['sorteados'] = $sorteados;

// Monta texto para email
$resultadoTexto = "Resultado do Sorteio dos 30 participantes:\n\n";
foreach ($sorteados as $idx => $numero) {
    $resultadoTexto .= ($idx + 1) . ". Número: " . $numero . "\n";
}

// Envia o email
$destinatario = "seu-email@dominio.com";
$assunto = "Resultado do Sorteio - 30 Participantes";
$cabecalhos = "From: no-reply@seudominio.com\r\n";
$cabecalhos .= "Content-Type: text/plain; charset=utf-8\r\n";

$mail_enviado = mail($destinatario, $assunto, $resultadoTexto, $cabecalhos);

// Redireciona para mostrar os sorteados
header('Location: ../../src/screens/sorteadoN.php');
exit();

$resultadoTexto = "Resultado do Sorteio dos 30 participantes:\n\n";
foreach ($sorteados as $idx => $numero) {
    $resultadoTexto .= ($idx + 1) . ". Número: " . $numero . "\n";
}

// ?>
