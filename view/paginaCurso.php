<?php
require_once('../library/library.php');
?>
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
    require_once ("../library/library.php");
    require_once ("../session/session.php");
    require_once ("../classes/Capacitacao.php");
    require_once ("../classes/Texto.php");
    $_id = $_POST['_idCurso'];
    $connectorTxt = new Texto ('../database/data.txt', '///');
    $arrayCapacitacao = $connectorTxt->toArray(); // -> transformar isto em uma biblioteca
    $capacitacao = new Capacitacao ($arrayCapacitacao[$_id]);
    $_tituloPagina = $capacitacao->_nomeDeApresentacao;
    $_subtituloPagina = "";
    require_once ("../includes/menu.php");
    incluiLogout($_SESSION['login'], $_SESSION['senha']);
  ?>

  <!-- Ao apertar no "Saiba Mais" do curso de Linux,
  o usuário é direcionado para essa sessão -->
  <div class="tipo-curso" id="linux">
    <div class="container">

      <div class="my-category">
        <div class="titulo-curso">
          <p><?=$capacitacao->_nomeDoCurso?></p>
        </div>
        <a class="btn btn-danger btn-lg" href="./linux.php" role="button">Clique aqui para se inscrever!</a>
      </div>
      <div class="row row-eq-height">
        <div class="col-md-6 ementa">
          <h3>Ementa</h3>
          <ul>
            <?php for ($i = 0; $i < count($capacitacao->_ementa); $i++) : ?>
            <li><?=$capacitacao->_ementa[$i]?></li>
            <?php endfor; ?>
          </ul>
        </div>

        <div class="col-md-6 dados">
          <i class="material-icons icone-curso">person</i>
          <p><b>Ministrante: </b><?=$capacitacao->_ministrante?></p>
          <i class="material-icons icone-curso">alarm_on</i>
          <p><b>Carga Horária: </b><?=$capacitacao->_cargaHoraria?></p>
          <i class="material-icons icone-curso">date_range</i>
          <p><b>Período: </b><?=$capacitacao->_periodo?></p>
          <i class="material-icons icone-curso">alarm</i>
          <p><b>Horário: </b><?=$capacitacao->_horario?></p>
          <i class="material-icons icone-curso">place</i>
          <p><b>Local: </b><?=$capacitacao->_local?></p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
