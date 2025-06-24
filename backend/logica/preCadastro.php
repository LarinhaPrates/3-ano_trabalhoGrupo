<?php
session_start();

$sexoValue = $_POST['sexo'] ?? '';

$mapaSexo = [
    1 => 'Feminino',
    2 => 'Masculino',
    3 => 'Outros',
    4 => 'Prefiro não dizer',
];

// Primeiro verifica se o valor é válido
if (!array_key_exists($sexoValue, $mapaSexo)) {
    $_SESSION['mensagem'] = "Selecione uma opção válida para o sexo.";
    header('Location: ../../src/screens/formulario1.php');
    exit;
}

// Agora que sabemos que é válido, pega o texto
$sexoTexto = $mapaSexo[$sexoValue];

// Armazena os dados na sessão, usando o texto correto do sexo
$_SESSION['formularios'] = [
    'nome' => $_POST['nome'],
    'telefone' => $_POST['telefone'],
    'data_nascimento' => $_POST['data_nascimento'],
    'endereco' => $_POST['endereco'],
    'sexo' => $sexoTexto // aqui passa o texto legível, não o value
];

header('Location: ../../src/screens/formulario2.php');
exit();
?>

