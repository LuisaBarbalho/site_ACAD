<?php
  require_once "../library/library.php";

  session_name ("autentica");
  session_start();

  if(!isset($_SESSION['login'])){
    header("Location: http://" . achaIP() . ":80/site_ACAD/view/login_adm.php");
  }
?>
