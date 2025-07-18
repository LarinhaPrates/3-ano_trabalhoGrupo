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
        header('Location: ../../src/screens/criarLogin.php');
        exit;
    }

    if ($senha !== $confirmaSenha) {
        $_SESSION['mensagem'] = "As senhas não conferem!";
        header('Location: ../../src/screens/criarLogin.php');
        exit;
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        // Verifica se já existe como ADM
        $sqlCheckAdm = "SELECT COUNT(*) FROM adm WHERE email = :email";
        $checkAdm = $conexao->prepare($sqlCheckAdm);
        $checkAdm->bindParam(':email', $email);
        $checkAdm->execute();
        $emailAdm = $checkAdm->fetchColumn();

        if ($emailAdm > 0) {
            $_SESSION['mensagem'] = "Este e-mail pertence a um administrador. Não pode ser cadastrado como aluno.";
            header('Location: ../../src/screens/criarLogin.php');
            exit;
        }

        // Verifica se já existe como USUARIO
        $sqlCheckUsuarios = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
        $checkUsuarios = $conexao->prepare($sqlCheckUsuarios);
        $checkUsuarios->bindParam(':email', $email);
        $checkUsuarios->execute();
        $emailUsuario = $checkUsuarios->fetchColumn();

        if ($emailUsuario > 0) {
            $_SESSION['mensagem'] = "Este e-mail já está cadastrado!";
            header('Location: ../../src/screens/criarLogin.php');
            exit;
        }

        // Cadastro na tabela usuarios
        $sql = "INSERT INTO usuarios (email, senha, nome) VALUES (:email, :senha, :nome)";
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
        header('Location: ../../src/screens/criarLogin.php');
        exit;
    } finally {
        unset($conexao);
    }
}
?>


