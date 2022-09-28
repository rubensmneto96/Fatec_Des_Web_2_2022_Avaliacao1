<?php
    session_start();

    if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['passwd']) == true)){
        header('location: index.php');
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Rubens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <section class="main">
        <div class="container">
            <h1 style="text-align: center; margin-top: 5rem;">
                Cadastro de Heróis
            </h1>

            <div class="container" style="width:50%; background-color: gray; border: 1px #292929 solid; border-radius: 4px; color: #fff; padding: 10px;">
                <form method="post" action="cadastrar.php" id="loginForm" name="loginForm">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Herói</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="idade" class="form-label">Idade</label>
                        <input type="numeric" class="form-control" id="idade" name="idade">
                    </div>
                    <div class="mb-3">
                        <label for="poder" class="form-label">Poder</label>
                        <input type="text" class="form-control" id="poder" name="poder">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                <br>
                
                <a href="heroisCadastrados.php" class="btn btn-success">Ver heróis cadastrados</a>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>