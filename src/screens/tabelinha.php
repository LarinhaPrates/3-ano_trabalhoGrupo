<?php
session_start();
if (!isset($_SESSION['formularios'])) {
    die("Nenhum formulário preenchido.");
}
$formularios = $_SESSION['formularios'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/style/tabelinha.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="divImg">
                                <img src="../../assets/img/perfil.png" class="card-img-top" alt="...">
                            </div>
                        </li>
                        <li class="nav-item justify-content-start align-items-center">
                            <a class="nav-link abhaya-libre-semibold text-light active" aria-current="page"
                                href="#">Participantes</a>
                        </li>
                        <li class="nav-item justify-content-start align-items-center">
                            <a class="nav-link text-light abhaya-libre-semibold" href="#">Sorteio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <table class="table table-bordered border-dark">
            <thead class="fundo">
                <tr>
                    <th scope="col" class="abhaya-libre-semibold text-light">ID</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Nome do Aluno</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Tel</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Data de Nasc.</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Endereço</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Sexo</th>
                </tr>
            </thead>
            <tbody class="branco">
<?php foreach ($formularios as $index => $formularios) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($formularios['id']);?></td>
                    <td><?php echo htmlspecialchars($formularios['nome']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['telefone']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['data_nascimento']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['endereco']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['sexo']); ?></td>
                </tr>
<?php endforeach; ?>
            </tbody>
        </table>
        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
            </svg>
        </button>
</body>

</html>