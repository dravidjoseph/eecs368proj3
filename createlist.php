<?php
	// created by Michael Wang
	//these functions get the information from the html page.

	session_start();
	$username = $_SESSION['login_user'];
	$title = $_POST['Title'];
	$counter = $_POST['counter'];
	$taskCounter=0;
	
<<<<<<< HEAD
	for($x = 0; $x < $counter; $x++)
=======
	//grabs the information in the form and puts it into the data base
	for($x = 0; $x <= $counter; $x++)
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
	{
		$task = $_POST["tasks$taskCounter"];
		$priority = $_POST["priority$taskCounter"];
		$date = $_POST["date$taskCounter"];
<<<<<<< HEAD
		
=======
		//checks to see if the connection with the database is valid
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
		$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
		if ($mysqli->connect_errno)
		{
		  printf("Connect failed: %s\n", $mysqli->connect_error);
		  exit();
		}

		//searches throught the user name to find the username given
		$search = "SELECT User FROM projUsers WHERE User = '$username'";

<<<<<<< HEAD
		$search2 = "SELECT title FROM projUsers WHERE title = '$title'";

		//this query adds information to the projData column of the tasks that the user enters into the form
		$query1 = "INSERT INTO projData (username, title, Task, Priority, Date)
		 VALUES ('$username','$title','$task','$priority','$date')";

		if(!isset($username) || $username !== '')
		{
			if(!isset($title) || $title !== '')
			{
				$listOfUsers =  $mysqli->query($search);
				if($listOfUsers->num_rows>0)
				{
				  while($row = $listOfUsers->fetch_assoc())
				  {
					if($row["User"] == $username)
					{
					  $result = true;
					  break;
					}
				  }
				}

=======
		//this query adds information to the projData column of the tasks that the user enters into the form
		$query1 = "INSERT INTO projData (username, title, Task, Priority, Date)
		 VALUES ('$username','$title','$task','$priority','$date')";

		if(!isset($username) || $username !== '')//checks to see if the username is not null
		{
			if(!isset($title) || $title !== '')//checks to see if the title is not null
			{
				$listOfUsers =  $mysqli->query($search);
				if($listOfUsers->num_rows>0)
				{
				  while($row = $listOfUsers->fetch_assoc())
				  {
					if($row["User"] == $username)
					{
					  $result = true;
					  break;
					}
				  }
				}

>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
				if($result)
				{
				  if(($mysqli->query($query1)))
				  {
					echo PHP_EOL;
					echo "list successfully added".PHP_EOL;
				  }
				  else
				  {
						echo PHP_EOL;
						echo "list not successfully added".PHP_EOL;
				  }
				}
				else
				{
					echo PHP_EOL;
					echo "not successfully added b/c username does not exist".PHP_EOL;
				}
			}
			else
			{
				echo PHP_EOL;
				echo "not successfully added b/c title is empty".PHP_EOL;
			}
		}
		else
		{
			echo PHP_EOL;
			echo "not successfully added b/c not logged in".PHP_EOL;
		}

<<<<<<< HEAD
		//This function sets up a new file that is going to overwrite things if the file already exists.
		//$myfileWrite = fopen($x, "w") or die("Can't open file!");
		//These functions write to the file for the list
=======
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
		echo PHP_EOL;
		$txt = "Title:".$title.PHP_EOL;
		echo $txt.PHP_EOL;
		$txt = "<br>"."Task:".$task.PHP_EOL;
		echo $txt.PHP_EOL;
		$txt = "<br>"."Priority:".$priority.PHP_EOL;
		echo $txt.PHP_EOL;
		$txt = "<br>"."Date:".$date.PHP_EOL;
		echo $txt.PHP_EOL;
		$taskCounter++;
	
	}
	echo "<br>"." ".PHP_EOL;
	echo "<br>"."Your List was Created!";
	echo "<br>"."<a href='logout.php'>".'Click to logout.'."</a>";
	echo "<br>"."<a href='userLists.php'>".'Click to edit your lists.'."</a>";
?>
