<!doctype html>
<html lang="pt-BR">
<!--Projeto criado por José Gabriel de valença Silva, RA - 29027936 Desenvolvido no Visual Studio Code-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem vindo!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>body {
        background-color: #2F4F4F
    }
    </style>
</head>

<body>
    <div class="container shadow rounded-3 my-5">
        <div class="row row-cols-1 py-3">
            <div class="col text-center">
                <?php
                $user = $_POST['Usuario'];              
                echo '<h4 ><font color="#FFFAFA">' . $user .' </font></h4>';
                echo '<h1 class="fw-bold" ><font color="#FFFAFA" ><br>Seja Bem vindo a Estante Virtual! <br><br></font></h1>';               
                ?>
            </div>
            <div class="col">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-outline-primary" href="./Index.html">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
<!--Projeto criado por José Gabriel de valença Silva, RA - 29027936 Desenvolvido no Visual Studio Code-->
</html>