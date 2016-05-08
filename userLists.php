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
	<body>
		<table align="center">

		<tr>
			<td>
				<form id = "list" action = "update.php">

				<div id="section1"><b>Title of list</b></div>
				<div id="section2">Title<input id="Title" type="text" name="Title" class="textform1"></div>

				<div id="section1"><b>Monday</b></div>
				<div id="section2">Task1<input id="mon1" type="text" name="mon1" class="textform1"></div>
				<div id="section2">Task2<input id="mon2" type="text" name="mon2" class="textform1"></div>
				<div id="section2">Task3<input id="mon3" type="text" name="mon3" class="textform1"></div>


				<div id="section1"><b>Tuesday</b></div>
				<div id="section2">Task1<input id="tue1" type="text" name="tue1" class="textform1"></div>
				<div id="section2">Task2<input id="tue2" type="text" name="tue2" class="textform1"></div>
				<div id="section2">Task3<input id="tue3" type="text" name="tue3" class="textform1"></div>

				<div id="section1"><b>Wednesday</b></div>
				<div id="section2">Task1<input id="wed1" type="text" name="wed1" class="textform1"></div>
				<div id="section2">Task2<input id="wed2" type="text" name="wed2" class="textform1"></div>
				<div id="section2">Task3<input id="wed3" type="text" name="wed3" class="textform1"></div>

				<div id="section1"><b>Thursday</b></div>
				<div id="section2">Task1<input id="thu1" type="text" name="thu1" class="textform1"></div>
				<div id="section2">Task2<input id="thu2" type="text" name="thu2" class="textform1"></div>
				<div id="section2">Task3<input id="thu3" type="text" name="thu3" class="textform1"></div>

				<div id="section1"><b>Friday</b></div>
				<div id="section2">Task1<input id="fri1" type="text" name="fri1" class="textform1"></div>
				<div id="section2">Task2<input id="fri2" type="text" name="fri2" class="textform1"></div>
				<div id="section2">Task3<input id="fri3" type="text" name="fri3" class="textform1"></div>

				<div id="section1"><b>Saturday</b></div>
				<div id="section2">Task1<input id="sat1" type="text" name="sat1" class="textform1"></div>
				<div id="section2">Task2<input id="sat2" type="text" name="sat2" class="textform1"></div>
				<div id="section2">Task3<input id="sat3" type="text" name="sat3" class="textform1"></div>

				<div id="section1"><b>Sunday</b></div>
				<div id="section2">Task1<input id="sun1" type="text" name="sun1" class="textform1"></div>
				<div id="section2">Task2<input id="sun2" type="text" name="sun2" class="textform1"></div>
				<div id="section2">Task3<input id="sun3" type="text" name="sun3" class="textform1"></div>

				<input type="submit" id="submit" value="Submit" class="button1">
				<input type="button" value="Clear Entire Form" class="button1" onClick="this.form.reset()">
				</form>
			</td>
		</tr>

		</table>
	</body>
</html>
<?php

session_start();
$username = $_SESSION['login_user'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

$search = "SELECT * FROM projData WHERE username = '$username'";

echo "table of all lists by this user".PHP_EOL;
echo "<table border='5'>";

$listsFromUser =  $mysqli->query($search);

while($row = $listsFromUser->fetch_assoc())
		{
			echo "<td>".$row["*"]."</td>".PHP_EOL;
		}
		echo "</table>";


echo "<a href = 'userLists.html'>".'Click to return to make a new list'."</a>".PHP_EOL;
?>
