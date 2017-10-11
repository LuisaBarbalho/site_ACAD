<?php
  require_once "../session/session.php";
  require_once "../library/library.php";

  session_destroy();

  header("Location: http://" . achaIP() . ":80/site_ACAD/view/login_adm.php");
?>
