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
   body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}
 </style>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "djoseph", "f2TUteC4dQRqL7jR", "djoseph");
	if ($mysqli->connect_errno)
	{
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

$title = $_POST["Download"];
$user = $_POST["user"];
$search = "SELECT * FROM projData WHERE title = '$title' AND username = '$user'";
$listsFromUser =  $mysqli->query($search);
$list = array
(
"Subject,Start Date",
);
$file = fopen("newfile.csv","w");
$dom = new domDocument;
$dom->formatOutput = true;
$root = $dom->appendChild($dom->createElement( "$title" ));
$sxe = simplexml_import_dom( $dom );

	$sxe->addChild("Row", "Tasks  |  Date  |  Priority");
      while($row = $listsFromUser->fetch_assoc())
    		{
    			$task = $row["Task"];
				$date = $row["Date"];
				$priority = $row["Priority"];
				array_push($list,"$task,$date");

				$sxe->addChild("Row", "$task   |$date|    $priority");

			}
		$dom->save('MyXmlFile.xml');
foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }

 fclose($myfile);
echo "<a class = 'button' href= 'newfile.csv' download= '$title'>".'Click to download this list as a .CSV file'."</a>" .PHP_EOL;
echo "<a class = 'button' href= 'MyXmlFile.xml' download= '$title'>".'Click to download this list as a .XML file'."</a><br><br><br><br>";
echo "<a class = 'button' href = 'createlist.html'>".'Click to return to make a new list'."</a><br><br>".PHP_EOL;
echo "<a class = 'button' href = 'logout.php'>".'Click to logout'."</a><br><br>".PHP_EOL;
echo "<a class = 'button' href = 'ViewOtherLists.html'>".'Click to view other lists'."</a>".PHP_EOL;



?>
