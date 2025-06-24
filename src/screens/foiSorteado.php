<?php
session_start();
include_once('../../backend/data/data.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    die("Usuário não identificado. Faça login primeiro.");
}

$userId = intval($_SESSION['id']);

// Verifica se houve sorteio
if (!isset($_SESSION['sorteados'])) {
    die("Nenhum sorteio foi realizado ainda.");
}

$sorteados = $_SESSION['sorteados'];

// Verifica se o ID do usuário está entre os sorteados
if (in_array($userId, $sorteados)) {
    // Pega os dados do aluno pelo ID
    $sql = "SELECT * FROM formularios WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$userId]);
    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$aluno) {
        die("Aluno não encontrado no banco.");
    }

    $nome = $aluno['nome'];
    $id = $aluno['id'];

    // Exibe a tela de "Parabéns, foi sorteado!"
} else {
    // Se não foi sorteado, redireciona para home ou outra página
    header('Location: ../screens/home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foi sorteado!</title>
    <link rel="stylesheet" href="../../assets/style/foiSorteado.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

<header>
    <div class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Forms</a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../../backend/logica/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<main>
    <div class="container text-center mt-5">
        <h1>🎉 Parabéns, <?= htmlspecialchars($nome) ?>!</h1>
        <h2>Você foi sorteado.</h2>
        <h3>Seu ID é <strong><?= htmlspecialchars($id) ?></strong></h3>
        <p>Vá até o <strong>Sesc</strong> para realizar sua matrícula.</p>
        <p><strong>Endereço:</strong> Rua Dr. José Pinto Rebelo Jr, nº 91.</p>
        <p>Leve documento e seu responsável.</p>
        <a href="home.php" class="btn btn-outline-primary mt-3">Voltar para Home</a>
    </div>
</main>

<footer>
    <div class="imagemAmarela">
        <img src="../../assets/img/ensino medio amarelo.png" alt="">
    </div>
</footer>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
    function startConfetti(duration = 5000) {
        const end = Date.now() + duration;
        (function frame() {
            confetti({
                particleCount: 5,
                angle: 60,
                spread: 55,
                origin: { x: 0 },
            });
            confetti({
                particleCount: 5,
                angle: 120,
                spread: 55,
                origin: { x: 1 },
            });
            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        })();
    }
    window.onload = startConfetti;
</script>

</body>
</html>
