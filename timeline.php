<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
	<title>Timeline View</title>
</head>

<style>
	* {font-family: century gothic;}
	table{
		table-layout: fixed;
	}
</style>


<body background="http://www.pixeden.com/media/k2/galleries/165/003-subtle-light-pattern-background-texture-vol5.jpg">
	<?php
 		define('DB_HOST','mysql.eecs.ku.edu');		//Host of Database
		define('DB_NAME','djoseph');				//Name of database (Dravid)
		define('DB_USER','djoseph');				//Username
		define('DB_PASSWORD','f2TUteC4dQRqL7jR');	//Password for database

		//basic config template taken from EECS 448 Lab 5

		//Connect to database
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

		//check that connection actually works.
		if($msyqli->connect_errno){
		  printf("Connect failed: %s\n", $mysqli->connect_error);
		  exit();
		}

		$title = "Get Title";//import here
		$query="SELECT * FROM projData WHERE title = $today";
		$query="SELECT * FROM projData WHERE Date = $tomorrow";
		$query2="SELECT * FROM projData WHERE title = $title";
		$query3="SELECT * FROM projData WHERE title = $title";
		$query3="SELECT * FROM projData WHERE title = $title";
		
		
		echo "<h1><center>TimeLine View for: $title </center></h1>";
	?>
		
		<header>
			<center>
				<h3> Priority: <span style="background-color:FireBrick">Very High</span>  
											<span style="background-color:IndianRed">High</span> 
											<span style="background-color:khaki">Medium</span> 
											<span style="background-color:moccasin">Low</span> 
											<span style="background-color:Papayawhip">Very Low</span> 
				</h3>
			</center>
		</header>
	


<table style= "width:100%">
<tr>
	<td> 
		<table style= "width:100%" border="1" >
			<tr>
				<th>Today:</th>
			</tr>
			<tr>
				<td>tasks</td>
			</tr>
		</table>
	</td>
	<td> 
		<table style="width:100%" border="1">
			<tr> 
				<th>Tomorrow:</th>
			</tr>
			<tr>
				<td>tasks</td>
			</tr>
		</table>
	</td>
	<td> 
		<table style="width:100%" border="1">
			<tr>
				<th>This Week:</th>
			</tr>
			<tr>
				<td>tasks</td>
			</tr>
		</table>
	</td>
	<td> 
		<table style="width:100%" border="1">
			<tr>
				<th>This Month:</th>
			</tr>
			<tr>
				<td>tasks</td>
			</tr>
		</table>
	</td>
	<td> 
		<table style="width:100%" border="1">
			<tr>
				<th>Eventually:</th>
			</tr>
			<tr>
				<td>tasks</td>
			</tr>
		</table>
	</td>
	<td> 
		<table style="width:100%" border="1">
			<tr>
				<th>
					<form action="action_page.php">
					  <input type="date" name="bday">
					  <input type="submit">
					</form>
				</th>
			</tr>
			<tr>
				<td>tasks</td>
			</tr>
		</table>
	</td>
	
</tr>
</table>

	<p> <a href="http://people.eecs.ku.edu/">Back to lists</a></p>
	<p> <a href="http://people.eecs.ku.edu/">Log out</a></p>	
	

</body>
</html>