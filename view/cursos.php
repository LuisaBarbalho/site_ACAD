<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACAD | cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
    $_tituloPagina = "Cursos";
    $_subtituloPagina = "";
    require_once ("../library/library.php");
    require_once ("../session/session.php");
    require_once ("../includes/menu.php");
    incluiLogout($_SESSION['login'], $_SESSION['senha']);
    incluiAdd($_SESSION['login'], $_SESSION['senha']);
  ?>

  <!-- divisão de 3 colunas contendo os cursos oferecidos -->
  <div class="my-container container text-center">
    <div class="row">

      <!-- 1a coluna: curso de Linux -->
      <div class="col-md-4">
        <img src="../img/linux_logo.png" height="80" width="80" />
        <h3>Linux</h3>
        <!-- pequena explicação -->
        <p class="text-justify">

        </p>
        <!-- botão que leva à ementa e aos dados do curso,
        direcionando para baixo por smooth scroll -->
        <button class="btn btn-danger"><a href="./linux.php">Saiba Mais</a></button>
        <?php incluiEdit($_SESSION['login'], $_SESSION['senha']); ?>
      </div>

      <!-- 2a coluna: curso de git -->
      <div class="col-md-4">
        <img src="../img/git_simbolo_logo.png" height="80" width="80" />
        <h3>Git</h3>
        <!-- pequena explicação -->
        <p class="text-justify">

        </p>
        <!-- botão que leva à ementa e aos dados do curso,
        direcionando para baixo por smooth scroll -->
        <button class="btn btn-secondary" ><a href="#">Em breve</a></button>
      </div>

      <!-- 3a coluna: curso de PostgreSQL -->
      <div class="col-md-4">
        <img src="../img/postgresql_logo.png" height="80" width="80" />
        <h3>PostgreSQL</h3>
        <!-- pequena explicação -->
        <p class="text-justify">

        </p>
        <!-- botão que leva à ementa e aos dados do curso,
        direcionando para baixo por smooth scroll -->
        <button class="btn btn-secondary"><a href="#">Em breve</a></button>
      </div>
    </div>
  </div>

</body>
</html>
