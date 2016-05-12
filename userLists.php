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
		<!-- Bootstrap code from online -->
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="createlist.js"></script>
	</head>
	<body>
	<p>Table of all lists by this user</p>
	<a href = "createlist.html"><input align="center" type="button" value="Click to return to make a new list"></a>
	<br><br><a href = "logout.php"><input align="center" type="button" value="Click to logout"></a></br></br>
	<br></br>
	<p>Select a list to edit</p>

		</table>
<?php
function listOptions()
{
session_start();
$username = $_SESSION['login_user'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}
	
	$search = "SELECT title FROM projData";
		echo "<select name='projData'>";

	  	$listOfLists =  $mysqli->query($search);

		while($row = $listOfLists->fetch_assoc())
		{
			$tValue = $row["title"];
			echo "<option value='$tValue'>".$row["title"]."</option>".PHP_EOL; 
		}
		echo "</select>";
}
?>

<form action="update.php">
  	<?php echo listOptions(); ?>

  	<input type="submit" value="submit">
  	</form>
</body>
</html>
