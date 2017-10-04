<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACAD | git</title>
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

  <!-- formulario de inscrição para o curso de Linux -->
  <div class="form">
    <div class="container-fluid">
      <div id="inscricao-git" class="categoria-banner">
        <img class="imagem-inscricao" src="../img/git_simbolo_logo.png"/>
        <div class="categoria-titulo">
          git
        </div>
      </div>


      <form action="../controller/controller_git.php" method="POST">
        <div class="form-conteudo">
          Nome:
          <input type="text" name="_nomeCadastro"/><br/>

          Email:
          <input type="email" name="_senhaCadastro" /><br/>

          Matrícula:
          <input type="text" name="_senhaConfirmada" /><br/>

          Telefone:
          <input type="text" name="_senhaConfirmada" /><br/>

          Data de Nascimento:
          <input type="text" name="_senhaConfirmada" /><br/>

          <div>
            <input type="submit" value="Enviar">
          </div>

        </div>
      </form>
    </div>
  </div>

</body>
</html>
