<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/login.css">
    <link rel="stylesheet" href="./src/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container d-flex justify-content-center  align-items-center flex-column">
        <div class="card w-50 justify-content-center  align-items-center">
            <div class="divImg justify-content-center  align-items-center position-relative">
                <img src="./assets/img/perfil.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body col col-sm-6 col-lg-8 d-flex flex-column">
                <h2 class="card-title fs-1 d-flex justify-content-center  align-items-center abhaya-libre-semibold textLogin">Login</h2>
                <form action="" method="post">
                    <div class="formulario d-flex flex-column">
                    <input type="text" placeholder="Username" class="inputUser border border-white w-auto abhaya-libre-semibold">
                    <input type="text" placeholder="Password" class="inputSenha border border-white mb-4 w-auto abhaya-libre-semibold">
                    <a href="" class="text-md-end mb-4 text-decoration-none fs-5 abhaya-libre-semibold link">Forgot Password</a>
                    <button class="btn btn-primary mb-4 abhaya-libre-semibold" type="button">Login</button>
                    <a href="" class="fs-4 text-center text-decoration-none abhaya-libre-semibold link">Não tem conta? Registre-se</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>