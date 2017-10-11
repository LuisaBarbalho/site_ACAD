<!DOCTYPE html>
<html>
<head>
    <title>ACAD | home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- fonte -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
    $_tituloPagina = "SEDIS Academy";
    $_subtituloPagina = "Investindo em você";
    require_once ("../includes/menu.php");
    require_once ("../session/session.php");
    require_once ("../includes/logout.php");


  ?>

  <div class="jumbotron">

          <!-- <h1 class="display-3 text-left">SEDIS Academy</h1> -->
          <!-- <p class="lead text-left">Investindo em você</p> -->



    <p>O SEDIS Academy é o nosso programa de treinamento, voltado aos nossos colaboradores,
      <br/>com o objetivo de ampliar os seus conhecimentos
    e <br/>contribuir desta forma para o seu crescimento profissional.</p>
    <p class="lead">
      <img src="../img/linux_logo.png" height="80" width="80" /><br/><br/>
      <a class="btn btn-danger btn-lg" href="./linux.php" role="button">Matricule-se no curso de Linux agora!</a>
    </p>
  </div>



</body>
</html>
