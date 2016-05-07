<?php

  session_start();
  include("config.php");

  if(isset($_SESSION['login_user']) != ""){
    header("location:success.php")
  }


?>
