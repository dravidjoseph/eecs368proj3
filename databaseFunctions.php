<?php
/*
*@Pre: Open database connection, username, and password
*@Post: returns matching user from database
*/
function isUserLoginValid($db,$user,$password){
	
	$query = $db->query("SELECT User FROM projUsers WHERE User = '$user' AND Password = '$password'");
	
	return $query;
}

/*
*@Pre: Open database connection, username, and password, and all task variables
*@Post: returns insert query success
*/
function insertTaskintoDatabase($db,$user,$pw,$mt1,$mt2,$mt3,$tt1,$tt2,$tt3,$wt1,$wt2,$wt3,$rt1,$rt2,$rt3,$ft1,$ft2,$ft3,$st1,$st2,$st3,$sut1,$sut2,$sut3){
	
	$query = $db->query("INSERT INTO projData (username, title, mondayTask1, mondayTask2, mondayTask3, tuesdayTask1, tuesdayTask2, tuesdayTask3, wednesdayTask1, wednesdayTask2, wednesdayTask3, thursdayTask1, thursdayTask2, thursdayTask3, fridayTask1, fridayTask2, fridayTask3, saturdayTask1, saturdayTask2, saturdayTask3, sundayTask1, sundayTask2, sundayTask3)
	 VALUES ('$username','$title','$mt1','$mt2','$mt3','$tt1','$tt2','$tt3','$wt1','$wt2','$wt3','$rt1','$rt2','$rt3','$ft1','$ft2','$ft3','$st1','$st2','$st3','$sut1','$sut2','$sut3')");
	
	return $query;
	
}

/*
*@Pre: Open database connection, username, task to be updated, and title of list
*@Post: returns update success.
*/
function updateUserEntry($db,$task,$title){
	$update = $db->query("UPDATE projData SET mondayTask1 = '$task' WHERE title = '$title'");
	
	return $update;
}

?>