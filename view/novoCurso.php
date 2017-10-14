<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACAD | novo</title>
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
    $_tituloPagina = 'Novo Curso';
    $_subtituloPagina = "";
    require_once ("../includes/menu.php");
    incluiLogout($_SESSION['login'], $_SESSION['senha']);
  ?>

  <!-- Ao apertar no "Saiba Mais" do curso de Linux,
  o usuário é direcionado para essa sessão -->
  <form action="../controller/controller_adicionarCurso.php" method="post">
    <div class="tipo-curso" id="linux">
      <div class="container">
        <div class="my-category">
          <div class="titulo-curso">
            <input class="categoria-titulo type="text" size="16" name="_nomeDeApresentacao" value="Nome de Apresentação">  
            <br/>
            <br/>
            <input type="text" size="30" name="_nomeDoCurso" value="Nome do Curso">  
          </div>
        </div>
        <div class="row row-eq-height">
          <div class="col-md-6 ementa">
            <h3>Ementa</h3>
            <ul>
              <textarea name="_ementa" rows=13 cols=48></textarea>
            </ul>
          </div>

          <div class="col-md-6 dados">
            <i class="material-icons icone-curso">person</i>
            <p><b>Ministrante: </b><input type="text" name="_ministrante"></p>
            <i class="material-icons icone-curso">alarm_on</i>
            <p><b>Carga Horária: </b><input type="text" name="_cargaHoraria"></p>
            <i class="material-icons icone-curso">date_range</i>
            <p><b>Período: </b><input type="text" name="_periodo"></p>
            <i class="material-icons icone-curso">alarm</i>
            <p><b>Horário: </b><input type="text" name="_horario"></p>
            <i class="material-icons icone-curso">place</i>
            <p><b>Local: </b><input type="text" name="_local"></p>
          </div>
        </div>
        <br/>
        <input class="btn btn-danger btn-lg" type="submit" value="Criar Curso">
      </div>
    </div>

</body>
</html>
