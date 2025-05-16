<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="./assets/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="./scripts/validate-login.php" method="post">
              <div class="form-group">

                <?php
                //Se foi apontado dentro da url que possui um erro DE AUTENTICAÇÃO
                if (isset($_GET['login']) && $_GET['login'] == 'erroAuth') { ?>
                  <!-- ATENÇÃO EM RELAÇÃO A ABERTURA DO BLOCO IF
                QUE SOMENTE FECHA APOS OUTRO BLOCO PHP, SENDO ASSIM
                O HTML INSERIDO SÓ VAI SER FEITO CASO O BLOCO IF FOR
                CONSIDERADO COMO VERDADEIRO -->



                  <div style="margin-bottom: 10px;" class="text-danger">É preciso se autenticar para acessar outras paginas</div>


                <?php } ?>


                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Senha">
              </div>
              <?php
              //Se foi apontado dentro da url que possui um erro
              if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <!-- ATENÇÃO EM RELAÇÃO A ABERTURA DO BLOCO IF
                QUE SOMENTE FECHA APOS OUTRO BLOCO PHP, SENDO ASSIM
                O HTML INSERIDO SÓ VAI SER FEITO CASO O BLOCO IF FOR
                CONSIDERADO COMO VERDADEIRO -->



                <div style="margin-bottom: 10px;" class="text-danger">Usuário ou senha invalidos</div>


              <?php } ?>


              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>