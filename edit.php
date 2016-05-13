<!--Created by Michael Wang -->
<html>
<head>
 		<style>
            #section1
			{
				padding:5px;
				line-height:10px;
				height:20px;
				font-size:20;
			}

			#section2
			{
				padding:10px;
				line-height:10px;
				font-size:20;
			}

			.textform1
			{
				width:200px;
			    clear:left;
			    text-align:right;
			    padding-right:10px;
			    float:right;
			}

			.button1
			{
				width:210px;
			}
        </style>

		
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="createlist.js"></script>
	</head>
	<body bgcolor="#FF0000"><a href = "createlist.html"><input align="center" type="button" value="Click to return to make a new list"></a>
	<br><br><a href = "userLists.php"><input align="center" type="button" value="Click to edit a different list"></a></br></br>
	<br><br><a href = "logout.php"><input align="center" type="button" value="Click to logout"></a></br></br>
	</body>
</html>
<?php
	session_start();
	$username = $_SESSION['login_user'];
	
	//checks to see if the connection with the database is valid
	$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}
	
	$title = $_GET['title'];
	$counter = $_GET['counter'];

	
	for($x = 0; $x < $counter; $x++)
	{
		$priority = $_GET["priority$x"];
		$task = $_GET["task$x"];
		$date = $_GET["date$x"];
		$priority1 = $_GET["priority1$x"];
		$task1 = $_GET["task1$x"];
		$date1 = $_GET["date1$x"];
		$query1 = "UPDATE projData SET Task = '$task' WHERE title = '$title' AND Priority = '$priority1' AND Date = '$date1'";
		
		//checks that everything is successfully edited
		$edit = $mysqli->query($query1);
		if($edit)
		{
			echo "Task successfully edited"."<br>";
		}
		else
		{
			echo "Task unsuccessfully edited"."<br>";
		}
	}
	
	for($x = 0; $x < $counter; $x++)
	{
		$priority = $_GET["priority$x"];
		$task = $_GET["task$x"];
		$date = $_GET["date$x"];
		$priority1 = $_GET["priority1$x"];
		$task1 = $_GET["task1$x"];
		$date1 = $_GET["date1$x"];
		$query2 = "UPDATE projData SET Priority = '$priority' WHERE title = '$title' AND Task = '$task1' AND Date = '$date1'";
		
		//checks that everything is successfully edited
		$edit = $mysqli->query($query2);
		if($edit)
		{
			echo "Priority successfully edited"."<br>";
		}
		else
		{
			echo "Priority unsuccessfully edited"."<br>";
		}
	}
	
	for($x = 0; $x < $counter; $x++)
	{
		$priority = $_GET["priority$x"];
		$task = $_GET["task$x"];
		$date = $_GET["date$x"];
		$priority1 = $_GET["priority1$x"];
		$task1 = $_GET["task1$x"];
		$date1 = $_GET["date1$x"];
		$query3 = "UPDATE projData SET Date = '$date' WHERE title = '$title' AND Priority = '$priority1' AND Task = '$task1'";
		
		//checks that everything is successfully edited
		$edit = $mysqli->query($query3);
		if($edit)
		{
			echo "Date successfully edited"."<br>";
		}
		else
		{
			echo "Date unsuccessfully edited"."<br>";
		}
	}

?>