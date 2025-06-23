<?php
session_start();
include_once('../data/data.php');

$form = $_SESSION['formularios'];

$nome = $form['nome'];
$telefone = $form['telefone'];
$data_nascimento = $form['data_nascimento'];
$endereco = $form['endereco'];
$sexo = $form['sexo'];

$cpf = $_POST['cpf'];
$unidade = $_POST['unidade'];
$nome_responsavel = $_POST['nome_responsavel'];
$telefone_responsavel = $_POST['telefone_responsavel'];
$email_responsavel = $_POST['email_responsavel'];

$cpf = preg_replace('/[^0-9]/', '', $_POST['cpf']);
$telefone = preg_replace('/[^0-9]/', '', $_POST['telefone']);
$telefone = preg_replace('/[^0-9]/', '', $_POST['telefone_responsavel']);


$sql = "INSERT INTO formularios (nome, telefone, data_nascimento, endereco, sexo, cpf, unidade, nome_responsavel, telefone_responsavel, email_responsavel) 
VALUES ('$nome', '$telefone', '$data_nascimento', '$endereco', '$sexo', '$cpf', '$unidade', '$nome_responsavel', '$telefone_responsavel', '$email_responsavel')";
$stmt = $conexao->prepare($sql);

if ($stmt->execute()) {
    session_destroy();
    header('Location: ../../src/screens/preCadastroSucesso.php');
    exit();
} else {
    // ...existing code...
    if (!$stmt->execute()) {
        $erro = $stmt->errorInfo();
        echo "Erro: " . $sql . "<br>" . $erro[2];
    }
    // ...existing code...
}


$conexao = null;
?>
