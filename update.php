<<<<<<< HEAD
=======
<!-- Created by Amber Yeasin-->
<!-- editted by Michael Wang-->
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
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
<<<<<<< HEAD
=======
		<!-- Bootstrap code from online -->
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="createlist.js"></script>
	</head>
	<body>
<a href = "createlist.html"><input align="center" type="button" value="Click to return to make a new list"></a>
<<<<<<< HEAD
	<br><br><a href = "logout.php"><input align="center" type="button" value="Click to logout"></a></br></br>
	<br></br>
=======
<br><br><a href = "userLists.php"><input align="center" type="button" value="Click to edit a different list"></a></br>
<br><a href = "logout.php"><input align="center" type="button" value="Click to logout"></a></br></br>	
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
<form action="edit.php">
<?php

session_start();
include('config.php');

//local variables
$username = $_SESSION['login_user'];
$title = $_GET['projData'];
<<<<<<< HEAD
//$priority = $_GET[''];

//checks that everything is successfully edited
// if($m1 != "")
// {
// $um1 = $mysqli->query("UPDATE projData SET mondayTask1 = '$m1' WHERE title = '$title'");
  // if($um1)
  // {
    // echo "Monday task 1 successfully edited"."<br>";
  // }
  // else
  // {
    // echo "Unable to edit Monday task 1"."<br>";
  // }
// }

//$mysqli->close();
$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

$search = "SELECT * FROM projData WHERE title = '$title'";
echo "<br>"."$title"."</br>".PHP_EOL;

echo "<table border='5'>";

$listsFromUser =  $mysqli->query($search);
$counter = 0;
			echo "<tr>".PHP_EOL;
			echo "<td>"."Task"."</td>".PHP_EOL;
			echo "<td>"."Priority"."</td>".PHP_EOL;
			echo "<td>"."Date"."</td>".PHP_EOL;
			echo "<td>"."Edit Priority"."</td>".PHP_EOL;
			echo "<tr>".PHP_EOL;

		while($row = $listsFromUser->fetch_assoc())
		{
=======
//checks to see if the connection with the database is valid
$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

$search = "SELECT * FROM projData WHERE title = '$title' ORDER BY Date ASC, Priority ASC";
echo "<br>"."$title"."</br>".PHP_EOL;

echo "<table border='5'>";

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
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
			echo "<tr>".PHP_EOL;
			echo "<td>".$row["Task"]."</td>".PHP_EOL;
			echo "<td>".$row["Priority"]."</td>".PHP_EOL;
			echo "<td>".$row["Date"]."</td>".PHP_EOL;
<<<<<<< HEAD
			echo "<td>"."Priority"."<select name='priority$counter'>"."<option value='1'>".'1'."</option>"."<option value='2'>".'2'."</option>"."<option value='3'>".'3'."</option>"."
               <option value='4'>".'4'."</option>"."<option value='5'>".'5'."</option>"."</select>"."</td>".PHP_EOL;
=======
			echo "<td>"."Task"."<input type='text' name='task$counter' value='$task'>"."</td>".PHP_EOL;
			echo "<input type='hidden' name='priority$counter' value='$priority'>".PHP_EOL;
			echo "<input type='hidden' name='date$counter' value='$date'>".PHP_EOL;
>>>>>>> 1409a7b0f1fd89ecac823012f05996dff6a3e38d
			echo "</tr>".PHP_EOL;
			$counter++;
		}
		echo "</table>";
		echo "<input type='hidden' name='counter' value='$counter'>".PHP_EOL;
		echo "<input type='hidden' name='title' value='$title'>".PHP_EOL;

?>
<input type="submit" value="submit">
</form>
</body>
</html>
