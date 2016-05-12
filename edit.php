<?php
	session_start();
	$username = $_SESSION['login_user'];
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}
	
	$title = $_GET['title'];
	$counter = $_GET['$counter'];
	$postcounter = 0;
	
	$query1 = "UPDATE projData SET Priority = '$priority' WHERE ((Priority != '$priority')&&(title == '$title'))";
	
	for($x = 0; $x < $counter; $x++)
	{
		$priority = $_POST["priority$counter"];
		
		
	}

?>