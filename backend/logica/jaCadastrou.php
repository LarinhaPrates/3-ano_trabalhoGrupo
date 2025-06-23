<?php 

// Recebe o CPF e limpa
$cpf = preg_replace('/\D/', '', $_POST['cpf']);

// Verifica no banco se o CPF existe
$sql = "SELECT * FROM formularios WHERE cpf = '$cpf'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // CPF encontrado → Login bem-sucedido
    $_SESSION['cpf'] = $cpf;
    $_SESSION['logado'] = true;
    header('Location: ../../src/screens/home.php');
    exit();
} else {
    // CPF não encontrado
    echo "
    <script>
      alert('CPF não encontrado. Faça o pré-cadastro primeiro.');
      window.location.href='../../src/screens/login.php';
    </script>";
    exit();
}
?>