<?php

//biblioteca que contém as funções
require_once "../library/library.php";
require_once "../session/session.php";

  session_name("autentica");
  session_start();

  $_login = $_POST['_login'];
  $_senha = $_POST['_senha'];

  $_verificaLogin = verificaLogin($_login, $_senha);

  if($_verificaLogin){
    $_SESSION['login'] = $_login;
    $_SESSION['senha'] = $_senha;
    header("Location: http://" . achaIP() . ":80/site_ACAD/view/index.php");
  }

  else{
    header("Location: http://" . achaIP() . ":80/site_ACAD/view/login_adm.php");
  }

?>
