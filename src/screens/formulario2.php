<?php
session_start();
$mensagem = $_SESSION['mensagem'] ?? null;
$_SESSION['mensagem'] = null;
?>

<?php if ($mensagem): ?>
    <div class="alert alert-warning text-center">
        <?= htmlspecialchars($mensagem) ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/style/formulario2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="card">
            <form action="../../backend/logica/finalizaCadastro.php" method="POST">
                <p class="fs-1 text-warning abhaya-libre-semibold justify-content-center text-center">Preencha o formulário</p>
            <div class="card-body ">
                <p class="fs-4 abhaya-libre-semibold">CPF:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="cpf"  name="cpf" placeholder="Password" required>
                    <label for="cpf" class="abhaya-libre-semibold">ex: ***.***.***-**</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Unidade:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0 " id="floatingPassword" name="unidade" placeholder="Password" required>
                    <label for="floatingPassword abhaya-libre-semibold">ex: Caiobá</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Nome do responsável:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="floatingPassword" placeholder="Password" name="nome_responsavel" required>
                    <label for="floatingPassword abhaya-libre-semibold">ex: Lara Prado Assakura</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Número do Responsável:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="telefone_responsavel" placeholder="Password" name="telefone_responsavel" required>
                    <label for="floatingPassword abhaya-libre-semibold">ex: +55 ** *****-****</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Email do Responsável</p>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control border-0" id="floatingInput" placeholder="name@example.com" name="email_responsavel" required>
                    <label for="floatingInput abhaya-libre-semibold">Email</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn text-center text-light fs-4 abhaya-libre-semibold">Confirmar Forms</button>
                </div>
            </div>

            <script src="https://unpkg.com/imask"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    IMask(document.getElementById('cpf'), { mask: '000.000.000-00' });
    IMask(document.getElementById('telefone_responsavel'), { mask: '(00) 00000-0000' });
  });
</script>


            </form>
        </div>
    </div>
</body>



</html>