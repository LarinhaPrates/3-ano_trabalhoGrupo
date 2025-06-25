<?php
 
session_start();
include_once('../../backend/data/data.php');
// 🔸 Verifica se houve sorteio
if (!isset($_SESSION['sorteados'])) {
    die("Nenhum sorteio realizado.");
}
 
$sorteados = $_SESSION['sorteados'];
 
// 🔸 Busca os dados completos dos sorteados no banco
$placeholders = implode(',', array_fill(0, count($sorteados), '?'));
$sql = "SELECT * FROM formularios WHERE id IN ($placeholders)";
$stmt = $conexao->prepare($sql);
$stmt->execute($sorteados);
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                            <a class="nav-link abhaya-libre-semibold text-white" href="../../backend/logica/logoutAdm.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
 

    <div class="table-container">
        <h1 class="text-light abhaya-libre-semibold">Sorteados</h1>
        <table class="table table-bordered table-hover text-center">
            <thead class="table azul">
                <tr>
                    <th class="abhaya-libre-semibold">#</th>
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
                <?php foreach ($lista as $index => $p): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo htmlspecialchars($p['id']); ?></td>
                        <td><?php echo htmlspecialchars($p['nome']); ?></td>
                        <td><?php echo htmlspecialchars($p['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($p['data_nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($p['endereco']); ?></td>
                        <td><?php echo htmlspecialchars($p['sexo']); ?></td>
                        <td><?php echo htmlspecialchars($p['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($p['unidade']); ?></td>
                        <td><?php echo htmlspecialchars($p['nome_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($p['telefone_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($p['email_responsavel']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
 
</html>
 