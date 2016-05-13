<!-- Created by Amber Yeasin-->
<!-- editted by Michael Wang-->
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
	<body bgcolor="#00FFFF" align="center">
<a href = "createlist.html"><input align="center" type="button" value="Click to return to make a new list"></a>
<br><br><a href = "userLists.php"><input align="center" type="button" value="Click to edit a different list"></a></br>
<br><a href = "logout.php"><input align="center" type="button" value="Click to logout"></a></br></br>	
<form action="edit.php">
<?php

session_start();
include('config.php');

//local variables
$username = $_SESSION['login_user'];
$title = $_GET['projData'];
//checks to see if the connection with the database is valid
$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

$search = "SELECT * FROM projData WHERE title = '$title' ORDER BY Date ASC, Priority ASC";
echo "<br>"."$title"."</br>".PHP_EOL;

echo "<table border='5' align='center'>";

$listsFromUser =  $mysqli->query($search);
$counter = 0;
			echo "<tr>".PHP_EOL;
			echo "<td>"."Task"."</td>".PHP_EOL;
			echo "<td>"."Priority"."</td>".PHP_EOL;
			echo "<td>"."Date"."</td>".PHP_EOL;
			echo "<td>"."Edit Task"."</td>".PHP_EOL;
			echo "<tr>".PHP_EOL;

		while($row = $listsFromUser->fetch_assoc())
		{
			$priority = $row["Priority"];
			$task = $row["Task"];
			$date = $row["Date"];
			echo "<tr>".PHP_EOL;
			echo "<td>".$row["Task"]."</td>".PHP_EOL;
			echo "<td>".$row["Priority"]."</td>".PHP_EOL;
			echo "<td>".$row["Date"]."</td>".PHP_EOL;
			echo "<td>"."Task"."<input type='text' name='task$counter' value='$task'>"."</td>".PHP_EOL;
			echo "<input type='hidden' name='priority$counter' value='$priority'>".PHP_EOL;
			echo "<input type='hidden' name='date$counter' value='$date'>".PHP_EOL;
			echo "</tr>".PHP_EOL;
			$counter++;
		}
		echo "</table>";
		echo "<input type='hidden' name='counter' value='$counter'>".PHP_EOL;
		echo "<input type='hidden' name='title' value='$title'>".PHP_EOL;

?>
<input type="submit" value="submit">
</form>
<img src="pic3.jpg" height = "50%" width = "50%">
</body>
</html>
