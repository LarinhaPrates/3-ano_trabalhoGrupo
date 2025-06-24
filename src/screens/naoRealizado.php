<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de erro no sorteio</title>
    <link rel="stylesheet" href="../../assets/style/foiSorteado.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
 
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link abhaya-libre-semibold text-white"
                                href="./tabelinhaBaixo.php">Participantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abhaya-libre-semibold text-white" href="./sorteador.php">Sorteio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abhaya-libre-semibold text-white" href="./sorteadoS.php">Sorteados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abhaya-libre-semibold text-white"
                                href="../../backend/logica/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <div class="sorteador">
                <h2>O sorteio ainda não foi</h2>
                <h2>realizado. aguarde até que o </h2>
                <h2>admistrador o realize-o</h2>
                <button type="button" class="btn btn-outline-light">Voltar</button>
            </div>
        </div>
    </main>
 
    <footer>
        <div class="divfooter justify-content-center align-items-center d-flex fixed-bottom ">
            <img src="../../assets/img/ensino medio amarelo.png" class="w-25 h-25 ">
        </div>
    </footer>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
 
</html>