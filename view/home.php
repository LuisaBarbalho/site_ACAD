<!DOCTYPE html>
<html>
<head>
    <title>ACAD | home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- fonte -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- bootstrap -->
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
          <li class="active"><a href="./home.php">Home</a></li>
          <li><a href="./sobre.php">Sobre</a></li>
          <li><a href="./cursos.php">Cursos</a></li>
          <li><a href="./inscreva.php">Inscreva-se</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- carousel - passagem de slide -->
  <div id="myCarousel" class="carousel slide">
    <div class="container-fluid text-center">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- imagem 1:  LINUX -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="../img/linux_home.png" alt="Linux" class="img-responsive center-block imagem-home">
        </div>

        <!-- imagem 2:  POSTGRESQL -->
        <div class="item">
          <img src="../img/postgresql_home.png" alt="PostgreSQL" class="img-responsive center-block imagem-home">
        </div>

        <!-- imagem 3:  GIT -->
        <div class="item">
          <img src="../img/git_home.png" alt="Git" class="img-responsive center-block imagem-home">
        </div>
      </div>

      <!-- seta para voltar slide -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
      </a>

      <!-- seta para ir ao próximo slide -->
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
      </a>
    </div>
  </div>

</body>
</html>
