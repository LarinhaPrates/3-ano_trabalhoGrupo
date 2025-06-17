<?php
session_start(); // Inicia a sessão
include_once('../data/data.php'); // Arquivo de conexão com o banco

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gmail = $_POST['email'] ;
    $senha = $_POST['senha'] ;
    if (!empty($gmail) && !empty($senha)) {
        // Preparar a query para evitar SQL Injection
        $sql = "SELECT id_usuario, email, senha FROM usuarios WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$gmail]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) === 1) {
            $usuario = $result[0];

            // Verifica a senha digitada com a senha hash salva no banco
            if (password_verify($senha, $usuario['senha'])) {
                // Login bem-sucedido
                $_SESSION['usuario_id'] = $usuario['id_usuarios'];
                $_SESSION['usuario_email'] = $usuario['email'];
                echo "Login realizado com sucesso!";
                // Redireciona, se quiser:
                // header("Location: dashboard.php");
                exit;
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }

        unset($stmt);
    } else {
        echo "Preencha todos os campos.";
    }
}
?>
