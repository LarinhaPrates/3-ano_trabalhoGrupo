<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/sorteado.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Sorteado</title>
</head>

<?php
$numero_sorteado = rand(1, 300); 
?>

<body>
    <div class="container-fluid p-0">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">Sorteio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" href="#">Participantes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" href="#">User</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class=" d-flex justify-content-center align-items-center  w-100 ">
            <div class="boxPrincipal justify-content-center align-items-center d-flex flex-column">
                <div class="boxTitulo row ">
                    <h1 class="fs-1  aclonica-regular sorteador justify-content-center align-items-center d-flex ">Numero </h1>
                    <h1 class="fs-1  aclonica-regular sorteador justify-content-center align-items-center d-flex">Sorteado</h1>
                </div>
                <div class="boxCentral my-3 row w-75 h-50 ">
                    <div class="box col d-flex justify-content-center" >
                        <span class=" fs-1 aclonica-regular badge rounded-circle  p-5 boxSpan"><?php $numero_sorteado?></span>
                    </div>
                </div>
                <div class="boxButton w-75">
                    <button type="button" class="btn btn-primary btn-lg text-light-50 mt-3 w-100 fs-3 button">Sortear Denovo</button>
                </div>
            </div>
        </main>
        <footer>
            <div class="divfooter justify-content-center align-items-center d-flex fixed-bottom h-auto">
                <img src="../../assets/img/ensino medio amarelo.png" class="w-25 h-25 ">
            </div>
        </footer>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

</html>