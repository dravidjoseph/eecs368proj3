<!--created by Amber Yeasin-->

<html>
	<!--general styling-->
	<style>
		*
		{
			font-family: century gothic;
			color: #2a2a2a;
		}
		
		div.corner 
		{
			position: fixed;
			top: 20px;
			right: 5%;
		}
		div.corner2
		{
			position: fixed;
			top: 20px;
			left: 5%;
		}
		div.tables
		{
			width: 100%; 
			border: 1;
			top: 10px;
		}
		td
		{
			vertical-align: top;
		}
		
	</style>
	
	<!--tab icon--> 
	<link rel="icon" href="http://www.clipartbest.com/cliparts/eTM/Kjn/eTMKjnGTn.png">

	<!--page title-->
	<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>Timeline View</title>
	</head>

	<!--background picture-->
<body background="http://www.pixeden.com/media/k2/galleries/165/003-subtle-light-pattern-background-texture-vol5.jpg">

	<!--buttons to leave page-->
	<div class="corner">
		<form action="userLists.php">
			<input type="submit" value="My Lists ">
		</form>
		<form action="logout.php">
			<input type="submit" value="Log out">
		</form>
	</div>


<?php

	//set timezone to central for date functions
	date_default_timezone_set('America/Chicago');

	//link to database
	$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	//set all variables 
	$title = $_GET["projData"];
	$today = date("Y-m-d");
	$tomorrow  = date('Y-m-d', strtotime(' +1 day'));
	$yesterday  = date('Y-m-d', strtotime(' -1 day'));
	$nWeekCheck = 6-date("w", strtotime("$tomorrow"));
	
	//calculations done for finding correct timeframes
	if($nWeekCheck >0)
	{
	$endweek = date('Y-m-d', strtotime(" +$nWeekCheck day"));
	}
	else if ($nWeekCheck == 0)
	{
		$endweek = $tomorrow;
	}
	else
	{
		$endweek = $today;
	}
	
	$nMonthCheck = date("t") - date("d");
	if($nMonthCheck >0)
	{
	$endmonth = date('Y-m-d', strtotime(" +$nMonthCheck day"));
	}
	if ($nMonthCheck == 0)
	{
		$endmonth = $today;
	}
	
	//feeds chosen date back to query and updates page
	$chosenDate = $_GET["date"];
	$chosenDateFormat = date_create($chosenDate);
	
	//queries to get list data for specified time frame
	$query="SELECT * FROM projData WHERE Date = '$today' AND title = '$title'";
	$query1="SELECT * FROM projData WHERE Date = '$tomorrow' AND title = '$title'";
	$query2="SELECT * FROM projData WHERE Date > '$tomorrow' AND Date <= '$endweek' AND title = '$title' ORDER BY Date";
	$query3="SELECT * FROM projData WHERE Date > '$endweek' AND Date <= '$endmonth' AND title = '$title'";
	$query4="SELECT * FROM projData WHERE Date > '$endmonth' AND title = '$title'";
	$query5="SELECT * FROM projData WHERE Date = '$chosenDate' AND title = '$title'";

	
	
	
	
	//print page title with list name
	echo "<h1><center>TimeLine View for: $title </center></h1>";

?>

	<!--show color code below title-->
	<header>
		<center>
			<h3> Priority: <span style="background-color:FireBrick">Very High</span> <span style="background-color:IndianRed">High</span> <span style="background-color:khaki">Medium</span> <span style="background-color:moccasin">Low</span> <span style="background-color:Papayawhip">Very Low</span></h3>
			<br>
		</center>
	</header>

	
<?php
	echo "<table style= 'width:100%'>"."<tr>";//nested table format
	
		//choose
		$todayTask = $mysqli->query($query5);//uses query to get relevant data
		echo "<td width = '16%'>"."<table style= 'width:100%' border='1' >"."<tr>"."<th>"."Chosen Date"."</th>";//head of new table
		while($row = $todayTask->fetch_assoc())//get tasks
		{
			$color = colorCode($row);//calls function to match priority to color
			echo "</tr>"."<tr>"."<td style='$color'>".$row["Task"]."</td>"."</tr>";//keep adding rows with tasks
		}
		echo "</table>"."</td>";//end table
		
		
		//today
		$todayTask = $mysqli->query($query);
		echo "<td width = '16%'>"."<table style= 'width:100%' border='1' >"."<tr>"."<th>".'Today'."</th>";
		while($row = $todayTask->fetch_assoc())
		{
			$color = colorCode($row);
			echo "</tr>"."<tr>"."<td style='$color'>".$row["Task"]."</td>"."</tr>";
		}
		echo "</table>"."</td>";
		
		
		//tomorrow
		$todayTask = $mysqli->query($query1);
		echo "<td width = '16%'>"."<table style= 'width:100%' border='1' >"."<tr>"."<th>".'Tomorrow'."</th>";
		while($row = $todayTask->fetch_assoc())
		{
			$color = colorCode($row);
			echo "</tr>"."<tr>"."<td style='$color'>".$row["Task"]."</td>"."</tr>";
		}
		echo "</table>"."</td>";
		
		
		//this week
		$todayTask = $mysqli->query($query2);
		echo "<td width = '16%'>"."<table style= 'width:100%' border='1' >"."<tr>"."<th>".'This Week'."</th>";
		while($row = $todayTask->fetch_assoc())
		{
			$color = colorCode($row);
			echo "</tr>"."<tr>"."<td style='$color'>".$row["Task"]."</td>"."</tr>";
		}
		echo "</table>"."</td>";
		
		
		//this month
		$todayTask = $mysqli->query($query3);
		echo "<td width = '16%'>"."<table style= 'width:100%' border='1' >"."<tr>"."<th>".'This Month'."</th>";
		while($row = $todayTask->fetch_assoc())
		{
			$color = colorCode($row);
			echo "</tr>"."<tr>"."<td style='$color'>".$row["Task"]."</td>"."</tr>";
		}
		echo "</table>"."</td>";
		
		
		//eventually
		$todayTask = $mysqli->query($query4);
		echo "<td width = '16%'>"."<table style= 'width:100%' border='1' >"."<tr>"."<th>".'Eventually'."</th>";
		while($row = $todayTask->fetch_assoc())
		{
			$color = colorCode($row);
			echo "</tr>"."<tr>"."<td style='$color'>".$row["Task"]."</td>"."</tr>";
		}
		echo "</table>"."</td>";
	echo "</tr>"."</table>";
	
	
	//allows the user to pick a date, showing current date
	if($chosenDate != "")
	{
		echo "<b>"."Viewing: ".date_format($chosenDateFormat,"F jS, Y")."</b>";
	}
	echo "<br>"."Choose a Date:"."<br>"."<form action ='timeline.php'> <input type='date' id = 'date' name='date'><input type = 'hidden' name = 'projData' value = '$title'><input type = 'submit'> </form>";

	
	//function to set correct priority color
	function colorCode($row) 
	{
		if($row["Priority"] == 1)
		{
			return "background-color:FireBrick";	
		}
		else if($row["Priority"] == 2)
		{
			return "background-color:IndianRed";
		}
		else if($row["Priority"] == 3)
		{
			return "background-color:khaki";
		}
		else if($row["Priority"] == 4)
		{
			return "background-color:moccasin";
		}
		else if($row["Priority"] == 5)
		{
			return "background-color:Papayawhip";
		}
		else
		{
			return "background-color";
		}
	}

//function to choose list, from userLists.pho	
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
	
	$search = "SELECT title FROM projData WHERE username = '$username'";
		echo "<select name='projData'>";

	  	$listOfLists =  $mysqli->query($search);

		while($row = $listOfLists->fetch_assoc())
		{
			if($title !== $row["title"])
				{
			$tValue = $row["title"];
			echo "<option value='$tValue'>".$row["title"]."</option>".PHP_EOL; 
			}
				$title = $row["title"];
		}
		echo "</select>";
}
?>

<!--give use option to choose list-->
<div class="corner2">
	Choose a List:
	<form action="timeline.php">
		<?php echo listOptions(); ?>

		<input type="submit" value="submit">
	</form>
</div?
	
</body>
</html>