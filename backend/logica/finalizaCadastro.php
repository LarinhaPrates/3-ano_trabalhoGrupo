<?php
session_start();
include_once('../data/data.php');

$form = $_SESSION['formularios'] ?? [];

// Dados do formulário da etapa anterior
$nome = trim($form['nome'] ?? '');
$telefone = preg_replace('/[^0-9]/', '', $form['telefone'] ?? '');
$data_nascimento = $form['data_nascimento'] ?? '';
$endereco = $form['endereco'] ?? '';
$sexo = $form['sexo'] ?? '';

// Dados do formulário atual
$cpf = preg_replace('/[^0-9]/', '', $_POST['cpf'] ?? '');
$unidade = $_POST['unidade'] ?? '';
$nome_responsavel = trim($_POST['nome_responsavel'] ?? '');
$telefone_responsavel = preg_replace('/[^0-9]/', '', $_POST['telefone_responsavel'] ?? '');
$email_responsavel = $_POST['email_responsavel'] ?? '';

// Verifica se todos os campos obrigatórios estão preenchidos
if (
    empty($nome) || empty($telefone) || empty($data_nascimento) || empty($endereco) || empty($sexo) ||
    empty($cpf) || empty($unidade) || empty($nome_responsavel) || empty($telefone_responsavel) || empty($email_responsavel)
) {
    $_SESSION['mensagem'] = "Preencha todos os campos obrigatórios.";
    header('Location: ../../src/screens/formulario2.php');
    exit;
}

// Verificação: nome do aluno ≠ nome do responsável
if (strcasecmp($nome, $nome_responsavel) === 0) {
    $_SESSION['mensagem'] = "O nome do aluno não pode ser igual ao nome do responsável.";
    header('Location: ../../src/screens/formulario2.php');
    exit;
}

// Cadastro no banco do formulário
$sql = "INSERT INTO formularios 
    (nome, telefone, data_nascimento, endereco, sexo, cpf, unidade, nome_responsavel, telefone_responsavel, email_responsavel) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);

if ($stmt->execute([
    $nome, 
    $telefone, 
    $data_nascimento, 
    $endereco, 
    $sexo, 
    $cpf, 
    $unidade, 
    $nome_responsavel, 
    $telefone_responsavel, 
    $email_responsavel
])) {
    session_destroy();
    header('Location: ../../src/screens/preCadastroSucesso.php');
    exit();
} else {
    $erro = $stmt->errorInfo();
    echo "Erro: " . $erro[2];
}

$conexao = null;
?>
