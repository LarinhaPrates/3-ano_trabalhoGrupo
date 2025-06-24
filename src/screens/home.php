<?php

session_start(); // Inicia a sessão

if (!isset($sorteados)) {
    $sorteados = []; // Ou defina conforme necessário
}

$_SESSION['sorteados'] = $sorteados; // Salva os sorteados na sessão

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../assets/style/home.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav justify-content-center align-items-center">
                        <li class="nav-item">
                            <img src="../../assets/img/logoSesc.png" class="logo" alt="">
                            <img src="../../assets/img/logoSenac.png" class="logo" alt="">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abhaya-libre-semibold text-white" href="./formulario1.php">Formulário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abhaya-libre-semibold text-white" href="./foiSorteado.php">Sorteados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abhaya-libre-semibold text-white" href="../../backend/logica/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
    </header>
    <main>
        <div class="row w-100 justify-content-between">
            <div class="col">
                <div class="text" >
                    <h1>O melhor ensino que seu filho pode obter!</h1>
                    <br>
                    <h4>O Sesc com parceria com o Senac te entrega 3 anos escolares com curso técnico, podendo expandir seu conhecimento além das matérias bases. Nesta instituição inclusão e respeito é algo essencial, venha conhecer mais sobre, não perca esta oportunidade!!</h4>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="image ">
                    <img src="../../assets/img/home.png" alt="">
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>