<?php
session_start();
include_once('../data/data.php');


// 🔸 Defina a quantidade de sorteados
$quantidade = 10;


$sql = "SELECT id FROM formularios";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$participantes = $stmt->fetchAll(PDO::FETCH_COLUMN);


// 🔸 Validação de quantidade
if (count($participantes) < $quantidade) {
    die("Não há participantes suficientes.");
}

// 🔸 Sorteia os IDs
shuffle($participantes);
$sorteados = array_slice($participantes, 0, $quantidade);

// 🔸 Salva os sorteados na sessão
$_SESSION['sorteados'] = $sorteados;

// 🔸 Monta o texto do e-mail
$resultadoTexto = "🟢 Resultado do Sorteio dos $quantidade participantes:\n\n";
foreach ($sorteados as $idx => $numero) {
    $resultadoTexto .= ($idx + 1) . ". ID: " . $numero . "\n";
}

// 🔸 Dados do e-mail
$destinatario = "seu-email@dominio.com";
$assunto = "Resultado do Sorteio - $quantidade Participantes";
$cabecalhos = "From: no-reply@seudominio.com\r\n";
$cabecalhos .= "Content-Type: text/plain; charset=utf-8\r\n";

// 🔸 Envia o e-mail
$mail_enviado = mail($destinatario, $assunto, $resultadoTexto, $cabecalhos);

if ($mail_enviado) {
    echo "Email enviado com sucesso!";
} else {
    echo "Erro ao enviar email.";
}

// 🔸 Redireciona para página que mostra os sorteados
header('Location: ../../src/screens/sorteadoN.php');
exit();
?>