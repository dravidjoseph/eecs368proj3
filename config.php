<?php

define('DB_HOST','mysql.eecs.ku.edu');
define('DB_NAME','djoseph');
define('DB_USER','djoseph');
define('DB_PASSWORD','f2TUteC4dQRqL7jR');

//basic config template taken from EECS 448 Lab 5

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($msyqli->connect_errno){
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

?>
