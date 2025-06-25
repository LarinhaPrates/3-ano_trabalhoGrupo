<?php
session_start();
if (!isset($_SESSION['sorteados'])) {
    die("Nenhum sorteio realizado.");
}
$sorteados = $_SESSION['sorteados'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Participantes Sorteados</title>
    <link rel="stylesheet" href="../../assets/style/sorteado.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid p-0">
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav justify-content-center align-items-center">
                            <li class="nav-item">
                                <a class="nav-link abhaya-libre-semibold text-white" href="./tabelinhaBaixo.php">Participantes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link abhaya-libre-semibold text-white" href="./sorteador.php">Sorteio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link abhaya-libre-semibold text-white" href="./sorteadoS.php">Sorteados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link abhaya-libre-semibold text-white" href="../../backend/logica/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="d-flex justify-content-center align-items-center w-100">
            <div class="boxPrincipal justify-content-center align-items-center d-flex flex-column">
                <div class="boxTitulo row text-center mb-4">
                    <h1 class="fs-1 aclonica-regular sorteador">Números Sorteados</h1>
                </div>

                <div class="boxCentral row w-75 h-auto d-flex flex-wrap justify-content-center gap-3">
    <?php foreach ($sorteados as $numero) : ?>
        <div class="box col-2 d-flex justify-content-center mb-3">
            <span
                class="fs-2 aclonica-regular badge rounded-circle p-4 boxSpan"
                style="min-width: 70px; min-height: 70px; display: flex; align-items: center; justify-content: center;">
                <?php echo htmlspecialchars($numero); ?>
            </span>
        </div>
    <?php endforeach; ?>
</div>


                <div class="boxButton w-75 mt-4">
                    <a href="sorteador.php" class="btn btn-primary btn-lg text-light-50 w-100 fs-3 button">Sortear
                        Novamente</a>
                </div>
            </div>
        </main>

        <footer>
            <div
                class="divfooter justify-content-center align-items-center d-flex fixed-bottom h-auto">
                <img src="../../assets/img/ensino medio amarelo.png" class="w-25 h-25" />
            </div>
        </footer>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
