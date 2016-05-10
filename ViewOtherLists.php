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

			echo "<tr>".PHP_EOL;
			echo "<td>"."title"."</td>".PHP_EOL;
			echo "<td>"."mondayTask1"."</td>".PHP_EOL;
			echo "<td>"."mondayTask2"."</td>".PHP_EOL;
			echo "<td>"."mondayTask3"."</td>".PHP_EOL;
			echo "<td>"."tuesdayTask1"."</td>".PHP_EOL;
			echo "<td>"."tuesdayTask2"."</td>".PHP_EOL;
			echo "<td>"."tuesdayTask3"."</td>".PHP_EOL;
			echo "<td>"."wednesdayTask1"."</td>".PHP_EOL;
			echo "<td>"."wednesdayTask2"."</td>".PHP_EOL;
			echo "<td>"."wednesdayTask3"."</td>".PHP_EOL;
			echo "<td>"."thursdayTask1"."</td>".PHP_EOL;
			echo "<td>"."thursdayTask2"."</td>".PHP_EOL;
			echo "<td>"."thursdayTask3"."</td>".PHP_EOL;
			echo "<td>"."fridayTask1"."</td>".PHP_EOL;
			echo "<td>"."fridayTask2"."</td>".PHP_EOL;
			echo "<td>"."fridayTask3"."</td>".PHP_EOL;
			echo "<td>"."saturdayTask1"."</td>".PHP_EOL;
			echo "<td>"."saturdayTask2"."</td>".PHP_EOL;
			echo "<td>"."saturdayTask3"."</td>".PHP_EOL;
			echo "<td>"."sundayTask1"."</td>".PHP_EOL;
			echo "<td>"."sundayTask2"."</td>".PHP_EOL;
			echo "<td>"."sundayTask3"."</td>".PHP_EOL;
			echo "<tr>".PHP_EOL;

while($row = $listsFromUser->fetch_assoc())
		{
			echo "<tr>".PHP_EOL;
			echo "<td>".$row["title"]."</td>".PHP_EOL;
			echo "<td>".$row["mondayTask1"]."</td>".PHP_EOL;
			echo "<td>".$row["mondayTask2"]."</td>".PHP_EOL;
			echo "<td>".$row["mondayTask3"]."</td>".PHP_EOL;
			echo "<td>".$row["tuesdayTask1"]."</td>".PHP_EOL;
			echo "<td>".$row["tuesdayTask2"]."</td>".PHP_EOL;
			echo "<td>".$row["tuesdayTask3"]."</td>".PHP_EOL;
			echo "<td>".$row["wednesdayTask1"]."</td>".PHP_EOL;
			echo "<td>".$row["wednesdayTask2"]."</td>".PHP_EOL;
			echo "<td>".$row["wednesdayTask3"]."</td>".PHP_EOL;
			echo "<td>".$row["thursdayTask1"]."</td>".PHP_EOL;
			echo "<td>".$row["thursdayTask2"]."</td>".PHP_EOL;
			echo "<td>".$row["thursdayTask3"]."</td>".PHP_EOL;
			echo "<td>".$row["fridayTask1"]."</td>".PHP_EOL;
			echo "<td>".$row["fridayTask2"]."</td>".PHP_EOL;
			echo "<td>".$row["fridayTask3"]."</td>".PHP_EOL;
			echo "<td>".$row["saturdayTask1"]."</td>".PHP_EOL;
			echo "<td>".$row["saturdayTask2"]."</td>".PHP_EOL;
			echo "<td>".$row["saturdayTask3"]."</td>".PHP_EOL;
			echo "<td>".$row["sundayTask1"]."</td>".PHP_EOL;
			echo "<td>".$row["sundayTask2"]."</td>".PHP_EOL;
			echo "<td>".$row["sundayTask3"]."</td>".PHP_EOL;
			echo "</tr>".PHP_EOL;
		}
		echo "</table>";
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, "title |");
    fwrite($myfile, "mondayTask1 |");
    fwrite($myfile, "mondayTask2 |");
    fwrite($myfile, "mondayTask3 |");
    fwrite($myfile, "tuesdayTask1 |");
    fwrite($myfile, "tuesdayTask2 |");
    fwrite($myfile, "tuesdayTask3 |");
    fwrite($myfile, "wednesdayTask1 |");
    fwrite($myfile, "wednesdayTask2 |");
    fwrite($myfile, "wednesdayTask3 |");
    fwrite($myfile, "thursdayTask1 |");
    fwrite($myfile, "thursdayTask2 |");
    fwrite($myfile, "thursdayTask3 |");
    fwrite($myfile, "fridayTask1 |");
    fwrite($myfile, "fridayTask2 |");
    fwrite($myfile, "fridayTask3 |");
    fwrite($myfile, "saturdayTask1 |");
    fwrite($myfile, "saturdayTask2 |");
    fwrite($myfile, "saturdayTask3 |");
    fwrite($myfile, "sundayTask1 |");
    fwrite($myfile, "sundayTask2 |");
    fwrite($myfile, "sundayTask3 |");



    while($row = $listsFromUser->fetch_assoc())
    		{
    			fwrite(myfile, $row["title"]);
    			fwrite(myfile, $row["mondayTask1"]);
    			fwrite(myfile, $row["mondayTask2"]);
    			fwrite(myfile, $row["mondayTask3"]);
    			fwrite(myfile, $row["tuesdayTask1"]);
    			fwrite(myfile, $row["tuesdayTask2"]);
    			fwrite(myfile, $row["tuesdayTask3"]);
    			fwrite(myfile, $row["wednesdayTask1"]);
    			fwrite(myfile, $row["wednesdayTask2"]);
    			fwrite(myfile, $row["wednesdayTask3"]);
    			fwrite(myfile, $row["thursdayTask1"]);
    			fwrite(myfile, $row["thursdayTask2"]);
    			fwrite(myfile, $row["thursdayTask3"]);
    			fwrite(myfile, $row["fridayTask1"]);
    			fwrite(myfile, $row["fridayTask2"]);
    			fwrite(myfile, $row["fridayTask3"]);
    			fwrite(myfile, $row["saturdayTask1"]);
    			fwrite(myfile, $row["saturdayTask2"]);
    			fwrite(myfile, $row["saturdayTask3"]);
    			fwrite(myfile, $row["sundayTask1"]);
    			fwrite(myfile, $row["sundayTask2"]);
    			fwrite(myfile, $row["sundayTask3"] +"\n");
    		}


    fclose($myfile);




echo "<a href = 'createlist.html'>".'Click to return to make a new list'."</a>".PHP_EOL;
echo "<a href = 'logout.php'>".'Click to logout'."</a>".PHP_EOL;
echo "<a href= 'newfile.txt' download= 'list'>".'Click to download this list'."</a>" .PHP_EOL;

?>
