<?php

session_start();
//opens database for querying
include("config.php");

//user is not logged in
if(isset($_POST['signup'])){
	//eliminate sql injection issues
  $username = mysqli_real_escape_string($mysqli,$_POST['user']);
  $password = mysqli_real_escape_string($mysqli,$_POST['pass']);

  //check for duplicates
  $check = $mysqli->query("SELECT User FROM projUsers WHERE User = '$username'");
  //if no duplicates, insert
  if($check->num_rows == 0){
	  //insert into table
    $insert = "INSERT INTO projUsers (User,Password) VALUES ('$username','$password')";
	
	//check if insert happened if so
    if($mysqli->query($insert) == TRUE){
		//set session user
      $_SESSION['login_user'] = $username;
	  //send to create a list
      header("Location: createlist.html");
    }
    else{
		//otherwise send back to create login page
      header("Location: newUser.html");
    }
  }
  else{
	  //same
    header("Location: newUser.html");
  }
  //close database connection
  mysqli_close($mysqli);


}



?>
