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
    $_tituloPagina = "Linux";
    $_subtituloPagina = "";
    require_once ("../includes/menu.php");
  ?>

  <!-- Ao apertar no "Saiba Mais" do curso de Linux,
  o usuário é direcionado para essa sessão -->
  <div class="tipo-curso" id="linux">
    <div class="container">

      <div class="my-category">
        <div class="titulo-curso">
          <p>Linux Básico para Programadores</p>
        </div>
        <a class="btn btn-danger btn-lg" href="./linux.php" role="button">Clique aqui para se inscrever!</a>
      </div>
      <div class="row row-eq-height">
        <div class="col-md-6 ementa">
          <h3>Ementa</h3>
          <ul>
            <li>Aspectos básicos do Linux - 30 minutos</li>
            <li>Startup e shutdown reset - 30 minutos</li>
            <li>Usuário, superusuário (root), grupos, acesso, proteção - 60 minutos</li>
            <li>Sessão, login, password, logout - 30 minutos</li>
            <li>Sistema de arquivos - 30 minutos</li>
            <li>Sistema hierárquico, árvore de diretórios, montagem de ramificações - 60 minutos</li>
            <li>Tipos básicos de arquivos: plain files, directory - 30 minutos</li>
            <li>Permissões para acesso a arquivos - 30 minutos</li>
            <li>Processos, Daemons - 30 minutos</li>
            <li>Comandos Básicos,  Comandos de ajuda e utilitários básicos - 60 minutos</li>
            <li>Comandos de manipulação de arquivos - 30 minutos</li>
            <li>Redirecionamento de entrada e saída - 30 minutos</li>
            <li>Análise de logs- 30 minutos</li>
            <li>Dúvidas - 90 minutos</li>
          </ul>
        </div>

        <div class="col-md-6 dados">
          <i class="material-icons icone-curso">person</i>
          <p><b>Ministrante: </b>Luide Capanema dos Santos</p>
          <i class="material-icons icone-curso">alarm_on</i>
          <p><b>Carga Horária: </b>10 horas</p>
          <i class="material-icons icone-curso">date_range</i>
          <p><b>Período: </b>09 a 13 de outubro de 2017</p>
          <i class="material-icons icone-curso">alarm</i>
          <p><b>Horário: </b>9h às 11h</p>
          <i class="material-icons icone-curso">place</i>
          <p><b>Local: </b>SEDIS - Auditório</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
