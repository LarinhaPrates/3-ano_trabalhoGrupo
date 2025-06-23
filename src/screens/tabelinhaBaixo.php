<?php
session_start();
include_once('../../backend/data/data.php');
$sql = "SELECT * FROM formularios";
$result = $conexao->query($sql);

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
                            <a class="nav-link text-light abhaya-libre-semibold" href="./sorteador.php">Sorteio</a>
                        </li>
                        <li class="nav-item justify-content-start align-items-center">
                            <a class="nav-link text-light abhaya-libre-semibold" href="./sorteadoS.php">Sorteados</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<<<<<<< HEAD
    <div class="container justify-content-center align-items-center mt-5">
=======
    <div class="container">
>>>>>>> 5a53c694b473b1ebbeffee500e2232f71ac4eb2a
        <?php while ($formularios = $result->fetch(PDO::FETCH_ASSOC)): ?>
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
                    <tr>
                        <td><?php echo htmlspecialchars($formularios['id']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['nome']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['data_nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['endereco']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['sexo']); ?></td>
                    </tr>
            </tbody>
        </table>
        <table class="table table-bordered border-dark">
            <thead class="fundo">
                <tr>
                    <th scope="col" class="abhaya-libre-semibold text-light">Cpf</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Unidade</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Nome do Resp.</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">N° do Resp.</th>
                    <th scope="col" class="abhaya-libre-semibold text-light">Email</th>
                </tr>
            </thead>
            <tbody class="branco">
                <tr>
                    <td><?php echo htmlspecialchars($formularios['cpf']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['unidade']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['nome_responsavel']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['telefone_responsavel']); ?></td>
                    <td><?php echo htmlspecialchars($formularios['email_responsavel']); ?></td>
                </tr>
            </tbody>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>