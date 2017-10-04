<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACAD | inscreva-se</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

  <!-- barra de navegação -->
  <nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">

      <!-- Logo -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">ACAD</a>
      </div>

      <!-- itens do menu -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./home.php">Home</a></li>
          <li><a href="./sobre.php">Sobre</a></li>
          <li><a href="./cursos.php">Cursos</a></li>
          <li class="active"><a href="./inscreva.php">Inscreva-se</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- banner inicial contendo o titulo da categoria -->
    <div class="categoria-banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="categoria-titulo">
              Inscreva-se
            </div>
          </div>

          <!-- icone utilizado no banner -->
          <div class="col-md-6">
            <div class="categoria-icones">
              <i class="material-icons" style="font-size:150px">insert_drive_file</i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center">
        <div class="row" style="margin-top: 40px">

          <div class="col-md-4">
            <div class="coluna-bloco">
              <img src="../img/linux_logo.png" height="80" width="80" />
              <h3>Linux</h3>
              <div class="dados-inscricao">
                <i class="material-icons" style="font-size:36px">alarm</i>
                Horario: 8h00<br/>
                <i class="material-icons" style="font-size:36px">date_range</i>
                Data: 20/10/2017<br/>
                <i class="material-icons" style="font-size:36px">person</i>
                Professor: Pierre
              </div>
              <button><a href="./inscricao_linux.php">Inscrição</a></button>
            </div>
          </div>


          <div class="col-md-4">
            <div class="coluna-bloco">
              <img src="../img/git_simbolo_logo.png" height="80" width="80" />
              <h3>Git</h3>
              <div class="dados-inscricao">
                <i class="material-icons" style="font-size:36px">alarm</i>
                Horario: 8h00<br/>
                <i class="material-icons" style="font-size:36px">date_range</i>
                Data: 20/10/2017<br/>
                <i class="material-icons" style="font-size:36px">person</i>
                Professor: Pierre
              </div>
              <button><a href="inscricao_git.php">Inscrição</a></button>
            </div>
          </div>


          <div class="col-md-4">
            <div class="coluna-bloco">
              <img src="../img/postgresql_logo.png" height="80" width="80" />
              <h3>PostgreSQL</h3>
                <div class="dados-inscricao">
                  <i class="material-icons" style="font-size:36px">alarm</i>
                  Horario: 8h00<br/>
                  <i class="material-icons" style="font-size:36px">date_range</i>
                  Data: 20/10/2017<br/>
                  <i class="material-icons" style="font-size:36px">person</i>
                  Professor: Pierre
                </div>
              <button><a href="inscricao_postgresql.php">Inscrição</a></button>
            </div>
          </div>
        </div>
    </div>

  </body>
  </html>
