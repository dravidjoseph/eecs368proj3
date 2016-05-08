<?php

session_start();
//opens database for querying
include("config.php");

//if user already logged in, then redirect
if(isset($_SESSION['login_user']) != ""){
  header("Location: success.php");
}

//user is not logged in
if(isset($_POST['signup'])){
  $username = mysqli_real_escape_string($mysqli,$_POST['user']);
  $password = mysqli_real_escape_string($mysqli,$_POST['pass']);

  //check for duplicates
  $check = $mysqli->query("SELECT User FROM projUsers WHERE User = '$username'");
  //if no duplicates, insert
  if($check->num_rows == 0){
    $insert = "INSERT INTO projUsers (User,Password) VALUES ('$username','$password')";
    if($mysqli->query($insert) == TRUE){
      header("Location: success.php");
    }
    else{
      header("Location: newUser.html");
    }
  }
  else{
    header("Location: newUser.html");
  }

  mysqli_close($mysqli);


}



?>
