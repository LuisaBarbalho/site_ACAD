<?php

  require_once("../session/session.php");
  $_SESSION['login'] = " ";
  $_SESSION['senha'] = " ";

  header("Location: ../view/index.php");

?>
