<nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <!-- Logo -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand"></a>
    </div>

    <!-- itens do menu -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./cursos.php">Cursos</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- banner inicial contendo o titulo da categoria -->
<div class="categoria-banner">
  <div class="container-fluid">
        <div class="categoria-titulo">
          <?php
            echo $_tituloPagina;
          ?>
        </div>
        <div class="subtitulo-pagina">
            <?php echo $_subtituloPagina; ?>
        </div>
  </div>
</div>
