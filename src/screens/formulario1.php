<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/style/formularario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="card">
            <form action="../../backend/logica/preCadastro.php" method="POST">
                <p class="fs-1 text-warning abhaya-libre-semibold justify-content-center text-center">Preencha o formulário</p>
            <div class="card-body ">
                <p class="fs-4 abhaya-libre-semibold">Nome Completo do Aluno:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="floatingPassword" name="nome"  placeholder="Password" required>
                    <label for="floatingPassword abhaya-libre-semibold">ex: Ana Akemi Prates</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Número de Telefone:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="telefone" name="telefone" placeholder="Password" required>
                    <label for="telefone" class="abhaya-libre-semibold">ex: +55 ** *****-****</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Data de Nascimento:</p>
                <div class="form-floating">
                    <input type="date" class="form-control border-0" id="floatingPassword" name="data_nascimento" placeholder="Password" required>
                    <label for="floatingPassword abhaya-libre-semibold">ex: **/**/****</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Endereço:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="floatingPassword" name="endereco" placeholder="Password" required>
                    <label for="floatingPassword abhaya-libre-semibold">ex: Rua ******** Número ***</label>
                </div>
                <p class="fs-4 abhaya-libre-semibold">Sexo:</p>
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="floatingPassword" name="sexo" placeholder="Password" required>
                    <label for="floatingPassword abhaya-libre-semibold">ex: Feminino</label>
                </div>
            </div>
        </div>
        <button  type="submit" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></button>
<script src="https://unpkg.com/imask"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    IMask(document.getElementById('telefone'), { mask: '(00) 00000-0000' });
  });
</script>


    </form>
    </div>
</body>

</html>