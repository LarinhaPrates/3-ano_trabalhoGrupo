<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adm ou Aluno</title>
    <link rel="stylesheet" href="../../assets/style/choose.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row justify-content-between row-cols-1 row-cols-md-2 g-4">
            <form action="./adm.php" method="POST">
                <div class="g-col-6">
                <div class="card justify-content-center align-items-center">
                    <img src="../../assets/img/adm.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <div class="d-grid justify-content-center align-items-center gap-2 col-6 mx-auto">
                            <button class="btn abhaya-libre-semibold btn-primary active" type="submit" >Administrador</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <form action="./criarLogin.php" method="POST">
                <div class="g-col-6">
                <div class="card justify-content-center align-items-center">
                    <img src="../../assets/img/estudante.jpg" class="img-fluid" alt="...">
                    <div class="card-body">
                        <div class="d-grid justify-content-center align-items-center gap-2 col-6 mx-auto">
                            <button  class="btn abhaya-libre-semibold btn-primary active" type="submit">Aluno</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>