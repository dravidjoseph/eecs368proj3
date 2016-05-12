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

?>
