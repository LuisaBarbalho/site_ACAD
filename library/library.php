<?php

  function verificaLogin($login, $senha){
    if($login=="souadm" && $senha=="1029384756"){
      return true;
    }
    else{
      return false;
    }
  }

  function achaIP(){
    $_ip = $_SERVER['REMOTE_ADDR'];
    return $_ip;
  }

  function incluiLogout($_login, $_senha){
    if($_login == "souadm" && $_senha == "1029384756"){
      require_once ("../includes/logout.php");
    }
  }

  function incluiAdd($_login, $_senha){
    if($_login == "souadm" && $_senha == "1029384756"){
      require_once ("../includes/add_button.php");
    }
  }

  function incluiEdit($_login, $_senha){
    if($_login == "souadm" && $_senha == "1029384756"){
      require ("../includes/edit_button.php");
    }
  }

  function incluiDelete($_login, $_senha){
    if($_login == "souadm" && $_senha == "1029384756"){
      require ("../includes/delete_button.php");
    }
  }

  function incluiLogin($login, $senha){
    if(verificaLogin($login, $senha)){
      require_once ("../includes/login_adm_info.php");
    }
    else {
      require_once("../includes/login_adm_button.php");
    }
  }

?>
