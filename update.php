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
	<br><br><a href = "logout.php"><input align="center" type="button" value="Click to logout"></a></br></br>
	<br></br>
<form action="edit.php">
<?php

//Created by Amber Yeasin
session_start();
include('config.php');

//local variables
$username = $_SESSION['login_user'];
$title = $_GET['projData'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

$search = "SELECT * FROM projData WHERE title = '$title' ORDER BY Priority ASC";
//$search1 = "SELECT * FROM projData ORDER BY Priority ASC";
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
			//$listsFromUser = $listsFromUser->sort_by(Priority);
		while($row = $listsFromUser->fetch_assoc())
		{
			echo "<tr>".PHP_EOL;
			echo "<td>".$row["Task"]."</td>".PHP_EOL;
			echo "<td>".$row["Priority"]."</td>".PHP_EOL;
			echo "<td>".$row["Date"]."</td>".PHP_EOL;
			echo "<td>"."Priority"."<select name='priority$counter'>"."<option value='1'>".'1'."</option>"."<option value='2'>".'2'."</option>"."<option value='3'>".'3'."</option>"."
               <option value='4'>".'4'."</option>"."<option value='5'>".'5'."</option>"."</select>"."</td>".PHP_EOL;
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
