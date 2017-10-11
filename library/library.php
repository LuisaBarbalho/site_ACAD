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

?>
