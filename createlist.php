<?php
	//these functions get the information from the html page.
	$username = $_GET['uname'];
	$username = $_SESSION['login_user'];
	$title = $_GET['Title'];
	$x = $title.".txt";
	$title = $x;
	$mt1 = $_GET['mon1'];
	$mt2 = $_GET['mon2'];
	$mt3 = $_GET['mon3'];
	$tut1 = $_GET['tue1'];
	$tut2 = $_GET['tue2'];
	$tut3 = $_GET['tue3'];
	$wt1 = $_GET['wed1'];
	$wt2 = $_GET['wed2'];
	$wt3 = $_GET['wed3'];
	$tht1 = $_GET['thu1'];
	$tht2 = $_GET['thu2'];
	$tht3 = $_GET['thu3'];
	$ft1 = $_GET['fri1'];
	$ft2 = $_GET['fri2'];
	$ft3 = $_GET['fri3'];
	$sat1 = $_GET['sat1'];
	$sat2 = $_GET['sat2'];
	$sat3 = $_GET['sat3'];
	$sut1 = $_GET['sun1'];
	$sut2 = $_GET['sun2'];
	$sut3 = $_GET['sun3'];

	$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TuteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	//searches throught the user name to find the username given
	$search = "SELECT User FROM projUsers WHERE User = '$username'";

	//this query adds information to the projData column of the tasks that the user enters into the form
	$query1 = "INSERT INTO projData (username,title, mondayTask1, mondayTask2, mondayTask3, tuesdayTask1, tuesdayTask2, tuesdayTask3, wednesdayTask1, wednesdayTask2, wednesdayTask3, thursdayTask1, thursdayTask2, thursdayTask3, fridayTask1, fridayTask2, fridayTask3, saturdayTask1, saturdayTask2, saturdayTask3, sundayTask1, sundayTask2, sundayTask3)
	 VALUES ('$username','$title','$mt1','$mt2','$mt3','$tut1','$tut2','$tut3','$wt1','$wt2','$wt3','$tht1','$tht2','$tht3','$ft1','$ft2','$ft3','$sat1','$sat2','$sat3','$sut1','$sut2','$sut3')";

	//this query selects all of the information from the title of the list in the database that matches the input of the form
	//$query2 = "SELECT * FROM projData WHERE title == '$title'";

	if(!isset($username) || $username === '')
	{
	    if(!isset($title) || $title === '')
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

		    if($result)
		    {
		      if(($result = $mysqli->query($query1)) == true)
		      {
		        echo "list successfully added".PHP_EOL;
		      }
		      else
		      {
		        echo "list not successfully added".PHP_EOL;
		      }
		    }
		    else
		    {
		      echo "not successfully added b/c username does not exist".PHP_EOL;
		    }
	    }
	    else
	    {
	    	echo "not successfully added b/c title is empty".PHP_EOL;
	    }
	}
	else
	{
	    echo "not successfully added b/c not logged in".PHP_EOL;
	}

/*
	//This function sets up a new file that is going to overwrite things if the file already exists.
	$myfileWrite = fopen($x, "w") or die("Can't open file!");
	//These functions write to the file for the list
	$txt = "Title:".$title.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Monday task 1:".$mt1.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Monday task 2:".$mt2.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Monday task 3:".$mt3.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Tuesday task 1:".$tut1.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Tuesday task 2:".$tut2.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Tuesday task 3:".$tut3.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Wednesday task 1:".$wt1.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Wednesday task 2:".$wt2.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Wednesday task 3:".$wt3.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Thursday task 1:".$tht1.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Thursday task 2:".$tht2.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Thursday task 3:".$tht3.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Friday task 1:".$ft1.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Friday task 2:".$ft2.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Friday task 3:".$ft3.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Saturday task 1:".$sat1.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Saturday task 2:".$sat2.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Saturday task 3:".$sat3.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Sunday task 1:".$sut1.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Sunday task 2:".$sut2.PHP_EOL;
	fwrite($myfileWrite, $txt);
	$txt = "Sunday task 3:".$sut3.PHP_EOL;
	fwrite($myfileWrite, $txt);
	fclose($myfileWrite);
*/
	echo "Your List was Created!"
?>
