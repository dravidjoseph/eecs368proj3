<?php
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

    $query = "SELECT user_id FROM Users";
        if ($result = $mysqli->query($query)){
    $arr = $result->fetch_all();
    }

    echo "<select name = 'login_user' id = 'login_user'>";

        foreach($arr as $entry) {
        echo "<option value= '$entry[0]'>$entry[0] </option>";
        }

    echo "</select>";
    $mysqli->close();
?>
