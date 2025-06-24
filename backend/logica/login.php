<?php
session_start();
include_once('../data/data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if (!empty($email) && !empty($senha)) {
        try {
            // Consulta nas tabelas adm e usuarios
            $sql = "
                SELECT id_usuario, email, senha, 'adm' AS tipo FROM adm WHERE email = ?
                UNION
                SELECT id_usuario, email, senha, 'usuario' AS tipo FROM usuarios WHERE email = ?
            ";

            $stmt = $conexao->prepare($sql);
            $stmt->execute([$email, $email]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                if (password_verify($senha, $usuario['senha'])) {
                    $_SESSION['usuario_id'] = $usuario['id_usuario'];
                    $_SESSION['usuario_email'] = $usuario['email'];
                    $_SESSION['usuario_tipo'] = $usuario['tipo'];

                    if ($usuario['tipo'] === 'adm') {
                        header("Location: ../../src/screens/sorteador.php");
                    } else {
                        header("Location: ../../src/screens/home.php");
                    }
                    exit;
                } else {
                    $_SESSION['mensagem'] = "Senha incorreta.";
                    header('Location: ../../index.php');
                    exit;
                }
            } else {
                $_SESSION['mensagem'] = "Usuário não encontrado.";
                header('Location: ../../index.php');
                exit;
            }
        } catch (PDOException $e) {
            $_SESSION['mensagem'] = "Erro no banco de dados. Tente novamente.";
            header('Location: ../../index.php');
            exit;
        }
    } else {
        $_SESSION['mensagem'] = "Preencha todos os campos.";
        header('Location: ../../index.php');
        exit;
    }
}
?>


