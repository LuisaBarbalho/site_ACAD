<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACAD | cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    require_once ("../classes/Capacitacao.php");
    require_once ("../classes/Texto.php");
    incluiLogout($_SESSION['login'], $_SESSION['senha']);
    incluiAdd($_SESSION['login'], $_SESSION['senha']);
    $connectorTxt = new Texto ('../database/data.txt', '///');
    $arrayCapacitacao = $connectorTxt->toArray();
  ?>

  <!-- divisão de 3 colunas contendo os cursos oferecidos -->
  <div class="my-container container text-center">
    <div class="row">

      <!-- 1a coluna: curso de Linux -->
      <?php
      for ($i = 0; $i < count($arrayCapacitacao); $i++) {
        $capacitacao = new Capacitacao($arrayCapacitacao[$i]);
        echo '<div class="curso_bloco col-md-4">';
          if ($_SESSION['login'] == "souadm" && $_SESSION['senha'] == "1029384756") {
            echo '<form action="../controller/controller_apagarCurso.php" method="post">';
              echo '<input type="hidden" name="_id" value="'.$capacitacao->_id.'" >';
              echo '<input class="btn btn-danger delete_icon" type="submit" value="&#xf00d;" onclick="return confirm("Tem certeza que deseja excluir curso?");" >';
            echo '</form>';
          }
          echo '<img src="'.$capacitacao->_icone.'" height="80" width="80" />';
          echo '<div class="delete_button text-right">';
          echo '</div>';
          echo '<h3>'.$capacitacao->_nomeDeApresentacao.'</h3>';
          echo '<p class="text-justify">';

          echo '</p>';
          echo '<form action="./paginaCurso.php" method="post">';
            echo '<input type="hidden" name="_idCurso" value='.$capacitacao->_id.'>';
            echo '<input class="btn btn-danger" type="submit" value="Saiba Mais">';
          echo '</form>';
          echo '<div class="edit_button text-right">';
            if ($_SESSION['login'] == "souadm" && $_SESSION['senha'] == "1029384756") {
              echo '<form action="./editarCurso.php" method="post">';
                echo '<input type="hidden" name="_idCurso" value='.$capacitacao->_id.'>';
                echo '<input class="edit_icon" type="submit" value="&#xf044;">';
              echo '</form>';
            }
          echo '</div>';
        echo '</div>';
      }
      ?>
    </div>
  </div>

</body>
</html>
