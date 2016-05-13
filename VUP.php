<?php

session_start();
$username = $_SESSION['login_user'];

define('DB_HOST','mysql.eecs.ku.edu');		//Host of Database
define('DB_NAME','djoseph');				//Name of database (Dravid)
define('DB_USER','djoseph');				//Username
define('DB_PASSWORD','f2TUteC4dQRqL7jR');	//Password for database

//basic config template taken from EECS 448 Lab 5

//Connect to database
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//check that connection actually works.
if($msyqli->connect_errno){
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

    $query = "SELECT User FROM projUsers";
        if ($result = $mysqli->query($query)){
    $arr = $result->fetch_all();
    }

		echo($username).PHP_EOL;
        foreach($arr as $entry) {
		if($entry[0] !== $username)
		{
        echo "<input type='checkbox' name = 'user[]' id = 'user' value='$entry[0]'>$entry[0]<br>";
		}
        }

    $mysqli->close();
?>
