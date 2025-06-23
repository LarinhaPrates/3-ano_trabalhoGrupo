<?php
session_start();

$_SESSION['formularios'] = [
    'nome' => $_POST['nome'],
    'telefone' => $_POST['telefone'],
    'data_nascimento' => $_POST['data_nascimento'],
    'endereco' => $_POST['endereco'],
    'sexo' => $_POST['sexo']
];

header('Location: ../../src/screens/formulario2.php');
exit();
?>
