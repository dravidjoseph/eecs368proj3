<?php

  session_start();
  include("config.php");

  if(isset($_SESSION['login_user']) != ""){
    header("location: success.php");
  }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($mysqli,$_POST['user']);
    $password = mysqli_real_escape_string($mysqli,$_POST['pass']);


    $query = $mysqli->query("SELECT User FROM projUsers WHERE User = '$username' AND Password = '$password'");

    if($query -> num_rows == 1){
      $_SESSION['login_user'] = $username;
      header("location: success.php");
    }
    else{
      header("location: index.html");
    }
  }

  mysqli_close($mysqli);

?>
