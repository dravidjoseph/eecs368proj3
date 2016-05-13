<html>
<head>
<style>

.button {
   border-top: 1px solid #96d1f8;
   background: #679cbf;
   background: -webkit-gradient(linear, left top, left bottom, from(#aec5d4), to(#679cbf));
   background: -webkit-linear-gradient(top, #aec5d4, #679cbf);
   background: -moz-linear-gradient(top, #aec5d4, #679cbf);
   background: -ms-linear-gradient(top, #aec5d4, #679cbf);
   background: -o-linear-gradient(top, #aec5d4, #679cbf);
   padding: 5px 10px;
   -webkit-border-radius: 11px;
   -moz-border-radius: 11px;
   border-radius: 11px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #ffffff;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #79aed1;
   background: #79aed1;
   color: #ccc;
   }
.button:active {
   border-top-color: #396d8f;
   background: #396d8f;
   }

.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #167F92;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}
</style>
<title></title>
<script src = "ViewOtherLists.js"> </script>

</head>
<body>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}
session_start();
$yourUser = $_SESSION['login_user'];
$username = $_GET['user'];
$titleCount = 0;
$firstTitle = 0;
foreach ($username as $user)
{
$searchtest = "SELECT * FROM projData WHERE username = '$user'";
$search = "SELECT * FROM projData WHERE username = '$user'";
$initialTitle = "SELECT * FROM projData WHERE username = '$user'";

$listTest =  $mysqli->query($searchtest);
if ($listTest->fetch_all() != null)
{
$listsFromUser =  $mysqli->query($search);
$initialQuery = $mysqli->query($initialTitle);
$initial = $initialQuery->fetch_assoc();
$title = $initial["title"];
echo "<h1> Lists for $user </h1>".PHP_EOL;
if ($titleCount >0)
{
	$titleCount ++;
}
echo "<input type='button' class = 'button' value='$title' onClick=displayList('div$titleCount')><br><br>".PHP_EOL;
echo "<div id = div$titleCount style ='display:none'>".PHP_EOL;
echo "<table class = 'responstable' border='5'>";


			

			echo "<tr>".PHP_EOL;
			echo "<td>"."Task"."</td>".PHP_EOL;
			echo "<td>"."Priority"."</td>".PHP_EOL;
			echo "<td>"."Date"."</td>".PHP_EOL;
			echo "<tr>".PHP_EOL;
while($row = $listsFromUser->fetch_assoc())
		{
				//$titleSearch = 'SELECT Task FROM projData WHERE title = "$row["title"]"';
				if($title !== $row["title"])
				{
					
					echo"</table> <br>".PHP_EOL;
					echo"</div>".PHP_EOL;

						$tempTitle = $row["title"];
					$titleCount ++;
					echo "<input type='button' class = 'button' value='$tempTitle' onClick=displayList('div$titleCount')><br><br>".PHP_EOL;

					echo "<div id = 'div$titleCount' style ='display:none'>".PHP_EOL;
					echo "<table class = 'responstable' border='5'>";
					echo "<tr>".PHP_EOL;
					echo "<td>"."Task"."</td>".PHP_EOL;
					echo "<td>"."Priority"."</td>".PHP_EOL;
					echo "<td>"."Date"."</td>".PHP_EOL;
					echo "<tr>".PHP_EOL;
					
				}
				echo "<tr>".PHP_EOL;
				echo "<td>".$row["Task"]."</td>".PHP_EOL;
				echo "<td>".$row["Priority"]."</td>".PHP_EOL;
				echo "<td>".$row["Date"]."</td>".PHP_EOL;
				echo "</tr>".PHP_EOL;
				
				$title = $row["title"];

		}
		echo "</table>";
		echo "</div>".PHP_EOL;
echo "<form action = 'download.php' method = 'post'>";
echo "<input type = 'hidden' value = '$user' name = 'user'>";
echo "<br>Download a List from $user:<br><select name='Download'>".PHP_EOL;
$dropQuery = "SELECT * FROM projData WHERE username = '$user'";
$titleFind = $mysqli->query($dropQuery);
while ($row = $titleFind->fetch_assoc())
{
	if($title !== $row["title"])
	{
		$tempTitle = $row["title"];
		echo ("<option value = '$tempTitle'> $tempTitle</option>");
	}
	$title = $row["title"];
}
echo "</select><br>".PHP_EOL;
echo "<input type = 'submit' value = 'Download' class = 'button'>";
echo "</form>";

}
else
{
	echo "<h1> No Lists available for $user </h1>".PHP_EOL;
}

}
$search = "SELECT * FROM projData WHERE username = '$yourUser'";
$listTest =  $mysqli->query($search);
if ($listTest->fetch_all() != null)
{
$listsFromUser =  $mysqli->query($search);
echo "<h1> Your Lists </h1>".PHP_EOL;
echo "<input type='button' class = 'button' value='$title' onClick=displayList('div$titleCount')><br><br>".PHP_EOL;
echo "<div id = div$titleCount style ='display:none'>".PHP_EOL;
echo "<table class = 'responstable' border='5'>";




			

			echo "<tr>".PHP_EOL;
			echo "<td>"."Task"."</td>".PHP_EOL;
			echo "<td>"."Priority"."</td>".PHP_EOL;
			echo "<td>"."Date"."</td>".PHP_EOL;
			echo "<tr>".PHP_EOL;

while($row = $listsFromUser->fetch_assoc())
		{
				echo "<tr>".PHP_EOL;
				echo "<td>".$row["Task"]."</td>".PHP_EOL;
				echo "<td>".$row["Priority"]."</td>".PHP_EOL;
				echo "<td>".$row["Date"]."</td>".PHP_EOL;
				echo "</tr>".PHP_EOL;
				if($title !== $row["title"])
				{
					echo"</table> <br>".PHP_EOL;
					echo"</div>".PHP_EOL;
					if($titleCount>$firstTitle)
					{
					echo "<input type='button' class = 'button' value='$title' onClick=displayList('div$titleCount')><br><br>".PHP_EOL;
					}
					echo "<div id = 'div$titleCount' style ='display:none'>".PHP_EOL;
					echo "<table class = 'responstable' border='5'>";
					echo "<tr>".PHP_EOL;
					echo "<td>"."Task"."</td>".PHP_EOL;
					echo "<td>"."Priority"."</td>".PHP_EOL;
					echo "<td>"."Date"."</td>".PHP_EOL;
					echo "<tr>".PHP_EOL;
					$titleCount ++;
				}
				
				//$title = $row["title"];

		}
		echo "</table>";
		echo "</div>".PHP_EOL;
}
else
{
	echo "<h1> You have no Lists </h1>".PHP_EOL;

}




echo "<a class = 'button' href = 'timeline.html'>".'Click to view timelines'."</a>".PHP_EOL;
echo "<a class = 'button' href = 'createlist.html'>".'Click to return to make a new list'."</a>".PHP_EOL;
echo "<a class = 'button' href = 'logout.php'>".'Click to logout'."</a>".PHP_EOL;
?>
</body>
</html>
