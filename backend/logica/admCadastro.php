<?php 
session_start();
include_once('../data/data.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "txtSenha", FILTER_SANITIZE_SPECIAL_CHARS);
    $confirmaSenha = filter_input(INPUT_POST, "txtConfirmeSenha", FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($email) || empty($senha) || empty($confirmaSenha) || empty($nome)) {
        $_SESSION['mensagem'] = "Preencha todos os campos!";
        header('Location: ../../src/screens/adm.php');
        exit;
    }

    if ($senha !== $confirmaSenha) {
        $_SESSION['mensagem'] = "As senhas não conferem!";
        header('Location: ../../src/screens/adm.php');
        exit;
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        $sqlCheck = "SELECT COUNT(*) FROM adm WHERE email = :email";
        $check = $conexao->prepare($sqlCheck);
        $check->bindParam(':email', $email);
        $check->execute();
        $emailExistente = $check->fetchColumn();

        if ($emailExistente > 0) {
            $_SESSION['mensagem'] = "Este e-mail já está cadastrado!";
            header('Location: ../../src/screens/adm.php');
            exit;
        }

        $sql = "INSERT INTO adm (email, senha, nome) VALUES (:email, :senha, :nome)";
        $insert = $conexao->prepare($sql);
        $insert->bindParam(':email', $email);
        $insert->bindParam(':senha', $senhaHash);
        $insert->bindParam(':nome', $nome);

        if ($insert->execute()) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../../src/screens/cadastradoSucesso.php');
            exit;
        } else {
            throw new Exception("Erro ao cadastrar.");
        }

    } catch (Exception $e) {
        $_SESSION['mensagem'] = "Erro ao cadastrar. Tente novamente.";
        header('Location: ../../src/screens/adm.php');
        exit;
    } finally {
        unset($conexao);
    }
}
?>

