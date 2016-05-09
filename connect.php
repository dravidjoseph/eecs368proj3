<?php

  session_start();
  include("config.php");

  //created by Dravid Joseph with help from EECS 448 Lab 5 template
  if($_SERVER["REQUEST_METHOD"] == "POST"){
	  //remove sql injection risk
    $username = mysqli_real_escape_string($mysqli,$_POST['user']);
    $password = mysqli_real_escape_string($mysqli,$_POST['pass']);

	//make sure user is in database
    $query = $mysqli->query("SELECT User FROM projUsers WHERE User = '$username' AND Password = '$password'");

	//if user is in database
    if($query -> num_rows == 1){
		//session variable to use later
      $_SESSION['login_user'] = $username;
	  //close connection
      mysqli_close($mysqli);
	  //send to create a list
      header("location: createlist.html");
    }
    else{
		//close connection
      mysqli_close($mysqli);
	  //send to homepage-all hope lost
      header("location: index.html");
    }
  }



?>
