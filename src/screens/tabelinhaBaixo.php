<?php
session_start();
include_once('../../backend/data/data.php');
$sql = "SELECT * FROM formularios";
$result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteados</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/style/sorteados.css">
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
 
    <div class="table-container">
        <h1 class="text-light abhaya-libre-semibold">Participantes</h1>
        <table class="table table-bordered table-hover text-center">
            <thead class="table azul">
                <tr>
                    <th class="abhaya-libre-semibold">ID</th>
                    <th class="abhaya-libre-semibold">Nome do Aluno</th>
                    <th class="abhaya-libre-semibold">Telefone</th>
                    <th class="abhaya-libre-semibold">Data de Nasc.</th>
                    <th class="abhaya-libre-semibold">Endereço</th>
                    <th class="abhaya-libre-semibold">Sexo</th>
                    <th class="abhaya-libre-semibold">CPF</th>
                    <th class="abhaya-libre-semibold">Unidade</th>
                    <th class="abhaya-libre-semibold">Nome do Resp.</th>
                    <th class="abhaya-libre-semibold">Telefone do Resp.</th>
                    <th class="abhaya-libre-semibold">Email do Resp.</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($formularios = $result->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($formularios['id']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['nome']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['data_nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['endereco']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['sexo']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['unidade']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['nome_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['telefone_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($formularios['email_responsavel']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
 
</html>