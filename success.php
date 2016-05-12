<?php

  include("session.php");
  if(isset($_SESSION['login_user']) == ""){
    header("location: Tasks.php");
  }
  else{
    header("location: Tasks.php");
  }

 ?>
