<?php 
session_start();
// ... código que obtém os IDs e sorteia ...
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/sorteador.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Sorteador</title>
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
                                <a class="nav-link abhaya-libre-semibold text-white" href="../../backend/logica/logoutAdm.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class=" d-flex justify-content-center align-items-center  w-100 ">
            <form action="../../backend/logica/sorteio.php" method="post">
                <div class="boxPrincipal justify-content-center align-items-center d-flex flex-column">
                    <div class="boxTitulo row ">
                        <h1 class="fs-1  aclonica-regular sorteador">Sorteador</h1>
                    </div>
                    <div class="boxCentral my-5 row">
                        <div class="box col mx-5">
                            <h2 class="text mt-3 abhaya-libre-regular fs-2">Sortear</h2>
                        </div>
                        <div class="box col mx-5">
                            <div class="boxInput rounded border border-light-subtle fs-1 aclonica-regular">
                                <p class="justify-content-center aling-itens-center text-center mt-2">30</p>
                            </div>
                        </div>
                        <div class="box col mx-5">
                            <h2 class="text mt-3 abhaya-libre-regular fs-2">números</h2>
                        </div>
                    </div>
                    <div class="boxButton w-75">
                        <button type="submit"
                            class="btn btn-primary btn-lg text-light-50 mt-3 w-100 fs-3 button">Sortear Agora!</button>
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <div class="divfooter justify-content-center align-items-center d-flex fixed-bottom ">
                <img src="../../assets/img/ensino medio amarelo.png" class="w-25 h-25 ">
            </div>
        </footer>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

</html>