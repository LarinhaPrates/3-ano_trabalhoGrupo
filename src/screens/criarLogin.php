<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/criarLogin.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Criar Login</title>
</head>

<body>
    <div class="container d-flex justify-content-center  align-items-center flex-column">
        <div class="card justify-content-center  align-items-center rounded-5 " style=" width: 40rem">
            <div class="h-25 divImg justify-content-center  align-items-center">
                <img src="../../assets/img/perfil.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body col col-sm-6 col-lg-9 d-flex flex-column">
                <form action="criarLogin.php" method="POST">
                    <div class="formulario d-flex flex-column">
                        <h2 class="card-title fs-3 d-flex  abhaya-libre-semibold textLogin align-baseline ">Digite seu Gmail:</h2>
                    <input type="email" name="email" placeholder="seu Gmail" class="inputUser border border-white  abhaya-libre-semibold ">
                    <h2 class="card-title fs-3 d-flex  abhaya-libre-semibold textLogin align-baseline ">Digite sua senha:</h2>
                    <input type="password" name="senha" placeholder="Sua senha" class="inputSenha border border-white mb-4 abhaya-libre-semibold ">
                    <h2 class="card-title fs-3 d-flex  abhaya-libre-semibold textLogin align-baseline ">Confirme a senha:</h2>
                    <input type="password" name="confirma_senha" placeholder="Confirme sua Senha" class="inputSenha border border-white mb-4 abhaya-libre-semibold ">
                    <h2 class="card-title fs-3 d-flex  abhaya-libre-semibold textLogin align-baseline ">Digite seu nome:</h2>
                    <input type="text" name="nome" placeholder="Seu nome" class="inputSenha border border-white mb-4 abhaya-libre-semibold ">
                    <div class="divButton w-auto h-auto d-flex justify-content-center  align-items-center">
                        <button class="btn btn-light  abhaya-libre-semibold text-primary rounded-pill h-100 fs-3" href="../../index.html" type="submit">CONFIRMAR</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>