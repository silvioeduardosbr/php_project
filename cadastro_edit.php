<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <?php
      include "conexao.php";
      $id = $_GET['id']?? '';

      $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

      $dados = mysqli_query($conn,$sql);

      $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cadastro</h1>
            <form action="cadastro_script.php" method="post"> 
              <!-- "action" indica pra onde vai apontar, no caso, "cadastro.php"-->
              <div class="mb-3">
                  <label for="nome" class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
              </div>
               <div class="mb-3">
                  <label for="endereco" class="form-label">Endereço</label>
                  <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
              </div>
               <div class="mb-3">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
              </div>
               <div class="mb-3">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
              </div>
               <div class="mb-3">
                  <label for="nascimento" class="form-label">Data de Nascimento</label>
                  <input type="date" class="form-control" name="nascimento" value="<?php echo $linha['nascimento']; ?>">
              </div>
              <div class="mb-3">
                  <input type="submit" class="btn btn-success" value="Salvar Alterações">
              </div>
            </form>
            <div>
                <a class="btn btn-primary" href="index.php" role="button">Voltar para o início</a>
            </div>
        </div>
      </div>
        
    </div>

   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>