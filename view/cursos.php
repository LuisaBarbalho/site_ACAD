<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACAD | cursos</title>
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
          <li class="active"><a href="./cursos.php">Cursos</a></li>
          <li><a href="./inscreva.php">Inscreva-se</a></li>
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
            Cursos
          </div>
        </div>

        <!-- icone utilizado no banner -->
        <div class="col-md-6">
          <div class="categoria-icones">
            <i class="material-icons" style="font-size:150px">computer</i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- divisão de 3 colunas contendo os cursos oferecidos -->
  <div class="my-container container text-center">
    <div class="row">

      <!-- 1a coluna: curso de Linux -->
      <div class="col-md-4">
        <img src="../img/linux_logo.png" height="80" width="80" />
        <h3>Linux</h3>
        <!-- pequena explicação -->
        <p class="text-justify">
          Linux é o núcleo do sistema operacional, programa responsável pelo funcionamento do computador,
          que faz a comunicação entre hardware (impressora, monitor, mouse, teclado)
          e software (aplicativos em geral). O conjunto do kernel e demais programas
          responsáveis por interagir com este é o que denominamos sistema operacional.
          O kernel é o coração do sistema.
        </p>
        <!-- botão que leva à ementa e aos dados do curso,
        direcionando para baixo por smooth scroll -->
        <button><a href="#linux">Saiba Mais</a></button>
      </div>

      <!-- 2a coluna: curso de git -->
      <div class="col-md-4">
        <img src="../img/git_simbolo_logo.png" height="80" width="80" />
        <h3>Git</h3>
        <!-- pequena explicação -->
        <p class="text-justify">
          Git is a free and open source distributed version control system designed to handle
          everything from small to very large projects with speed and efficiency.
          Git is easy to learn and has a tiny footprint with lightning fast performance.
          It outclasses SCM tools like Subversion, CVS, Perforce, and ClearCase with features
          like cheap local branching, convenient staging areas, and multiple workflows.
        </p>
        <!-- botão que leva à ementa e aos dados do curso,
        direcionando para baixo por smooth scroll -->
        <button><a href="#git">Saiba Mais</a></button>
      </div>

      <!-- 3a coluna: curso de PostgreSQL -->
      <div class="col-md-4">
        <img src="../img/postgresql_logo.png" height="80" width="80" />
        <h3>PostgreSQL</h3>
        <!-- pequena explicação -->
        <p class="text-justify">
          PostgreSQL is a powerful, open source object-relational database system.
          It has more than 15 years of active development and a proven architecture that has
          earned it a strong reputation for reliability, data integrity, and correctness.
          It runs on all major operating systems, including Linux, UNIX (AIX, BSD, HP-UX, SGI IRIX,
          macOS, Solaris, Tru64), and Windows.
        </p>
        <!-- botão que leva à ementa e aos dados do curso,
        direcionando para baixo por smooth scroll -->
        <button><a href="#postgresql">Saiba Mais</a></button>
      </div>
    </div>
  </div>

  <!-- Ao apertar no "Saiba Mais" do curso de Linux,
  o usuário é direcionado para essa sessão -->
  <div class="tipo-curso" id="linux">
    <div class="container">

      <div class="my-category">
        <div class="subtitulo">
          <h1>LINUX</h1>
        </div>
        <div>
          <img class="imagem-subtitulo" src="../img/linux_logo.png"/>
        </div>
      </div>
      <div class="row row-eq-height">
        <div class="col-md-6 ementa">
          <h3>Ementa</h3>
          <ul>
            <li>Conhecendo o ambiente do sistema operacional</li>
            <li>Preparando / Iniciando o sistema Linux</li>
            <li>Entendendo o processo de inicialização e mais comandos</li>
            <li>Comandos no Linux e Links para arquivos / diretórios</li>
            <li>Gerenciamento de partições e sistema de arquivos</li>
            <li>Gerenciamento de usuários / grupos e permissões de arquivos / diretóri</li>
          </ul>
        </div>

        <div class="col-md-6 dados">
          <i class="material-icons" style="font-size:36px">alarm</i>
          Horario: 8h00<br/>
          <i class="material-icons" style="font-size:36px">date_range</i>
          Data: 20/10/2017<br/>
          <i class="material-icons" style="font-size:36px">person</i>
          Professor: Pierre<br/>
        </div>
      </div>
    </div>
  </div>

  <!-- Ao apertar no "Saiba Mais" do curso de Git,
  o usuário é direcionado para essa sessão -->
  <div class="tipo-curso" id="git">
    <div class="container">
      <div class="my-category">
        <div class="subtitulo">
          <h1>GIT</h1>
        </div>
        <div>
          <img class="imagem-subtitulo" src="../img/git_simbolo_logo.png"/>
        </div>
      </div>
      <div class="row row-eq-height">
        <div class="col-md-6 ementa">
          <h3>Ementa</h3>
          <ul>
            <li>Conhecendo o ambiente do sistema operacional</li>
            <li>Preparando / Iniciando o sistema Linux</li>
            <li>Entendendo o processo de inicialização e mais comandos</li>
            <li>Comandos no Linux e Links para arquivos / diretórios</li>
            <li>Gerenciamento de partições e sistema de arquivos</li>
            <li>Gerenciamento de usuários / grupos e permissões de arquivos / diretóri</li>
          </ul>
        </div>

        <div class="col-md-6 dados">
          <i class="material-icons" style="font-size:36px">alarm</i>
          Horario: 8h00<br/>
          <i class="material-icons" style="font-size:36px">date_range</i>
          Data: 20/10/2017<br/>
          <i class="material-icons" style="font-size:36px">person</i>
          Professor: Pierre<br/>
        </div>
      </div>
    </div>
  </div>

  <!-- Ao apertar no "Saiba Mais" do curso de PostgreSQL,
  o usuário é direcionado para essa sessão -->
  <div class="tipo-curso" id="postgresql">
    <div class="container">
      <div class="my-category">
        <div class="subtitulo">
          <h1>PostgreSQL</h1>
        </div>
        <div>
          <img class="imagem-subtitulo" src="../img/postgresql_logo.png"/>
        </div>
      </div>
      <div class="row row-eq-height">
        <div class="col-md-6 ementa">
          <h3>Ementa</h3>
          <ul>
            <li>Conhecendo o ambiente do sistema operacional</li>
            <li>Preparando / Iniciando o sistema Linux</li>
            <li>Entendendo o processo de inicialização e mais comandos</li>
            <li>Comandos no Linux e Links para arquivos / diretórios</li>
            <li>Gerenciamento de partições e sistema de arquivos</li>
            <li>Gerenciamento de usuários / grupos e permissões de arquivos / diretóri</li>
          </ul>
        </div>

        <div class="col-md-6 dados">
          <i class="material-icons" style="font-size:36px">alarm</i>
          Horario: 8h00<br/>
          <i class="material-icons" style="font-size:36px">date_range</i>
          Data: 20/10/2017<br/>
          <i class="material-icons" style="font-size:36px">person</i>
          Professor: Pierre<br/>
        </div>
      </div>
    </div>
  </div>

<!-- Smooth scroll -->
<script>
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
  });
</script>

</body>
</html>
