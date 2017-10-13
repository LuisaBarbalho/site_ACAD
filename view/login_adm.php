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
    $_tituloPagina = "Login";
    $_subtituloPagina = "ADMNISTRADOR";
    require_once ("../library/library.php");
    require_once ("../session/session.php");
    $_SESSION['login'] = " ";
    $_SESSION['senha'] = " ";
    require_once ("../includes/menu.php");
  ?>
  <div class="text-right">
    <button class="logout btn btn-danger"><a href="../controller/controller_sem_logar.php">Entrar sem logar</a></button>
  </div>

  <div class="form">
    <form action="../controller/controller_login_adm.php" method="POST" class="container">
    <div class="requerimentos">
      Login:
      <input type="text" name="_login"/>
    </div>

    <div class="requerimentos">
      Senha:
      <input type="password" name="_senha" />
    </div>

    <div>
      <input type="submit" value="Entrar">
    </div>
  </div>


</body>
</html>
