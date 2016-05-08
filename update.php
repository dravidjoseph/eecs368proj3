<?php
session_start();
include('config.php');

$username = $_SESSION['login_user'];
$title = $_GET['Title'];
$m1 = $_GET['mon1'];
$m2 = $_GET['mon2'];
$m3 = $_GET['mon3'];
$tu1 = $_GET['tue1'];
$tu2 = $_GET['tue2'];
$tu3 = $_GET['tue3'];
$w1 = $_GET['wed1'];
$w2 = $_GET['wed2'];
$w3 = $_GET['wed3'];
$th1 = $_GET['thu1'];
$th2 = $_GET['thu2'];
$th3 = $_GET['thu3'];
$f1 = $_GET['fri1'];
$f2 = $_GET['fri2'];
$f3 = $_GET['fri3'];
$sa1 = $_GET['sat1'];
$sa2 = $_GET['sat2'];
$sa3 = $_GET['sat3'];
$su1 = $_GET['sun1'];
$su2 = $_GET['sun2'];
$su3 = $_GET['sun3'];

if($m1 != ""){
$um1 = $mysqli->query("UPDATE projData SET mondayTask1 = '$m1' WHERE title = '$title'");
  if($um1){
    echo "Monday task 1 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Monday task 1"."<br>";
  }
}
if($m2 != ""){
$um2 = $mysqli->query("UPDATE projData SET mondayTask2 = '$m2' WHERE title = '$title'");
  if($um2){
    echo "Monday task 2 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Monday task 2"."<br>";
  }
}
if($m3 != ""){
$um3 = $mysqli->query("UPDATE projData SET mondayTask3 = '$m3' WHERE title = '$title'");
  if($um3){
    echo "Monday task 3 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Monday task 3"."<br>";
  }
}
if($tu1 != ""){
$utu1 = $mysqli->query("UPDATE projData SET tuesdayTask1 = '$tu1' WHERE title = '$title'");
  if($utu1){
    echo "Tuesday task 1 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Tuesday task 1"."<br>";
  }
}
if($tu2 != ""){
$utu2 = $mysqli->query("UPDATE projData SET tuesdayTask2 = '$tu2' WHERE title = '$title'");
  if($utu2){
    echo "Tuesday task 2 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Tuesday task 2"."<br>";
  }
}
if($tu3 != ""){
$utu3 = $mysqli->query("UPDATE projData SET tuesdayTask3 = '$tu3' WHERE title = '$title'");
  if($utu3){
    echo "Tuesday task 3 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Tuesday task 3"."<br>";
  }
}
if($w1 != ""){
$uw1 = $mysqli->query("UPDATE projData SET wednesdayTask1 = '$w1' WHERE title = '$title'");
  if($uw1){
    echo "Wednesday task 1 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Wednesday task 1"."<br>";
  }
}
if($w2 != ""){
$uw2 = $mysqli->query("UPDATE projData SET wednesdayTask2 = '$w2' WHERE title = '$title'");
  if($uw2){
    echo "Wednesday task 2 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Wednesday task 2"."<br>";
  }
}
if($w3 != ""){
$uw3 = $mysqli->query("UPDATE projData SET wednesdayTask3 = '$w3' WHERE title = '$title'");
  if($uw3){
    echo "Wednesday task 3 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Wednesday task 3"."<br>";
  }
}
if($th1 != ""){
$uth1 = $mysqli->query("UPDATE projData SET thursdayTask1 = '$th1' WHERE title = '$title'");
  if($uth1){
    echo "Thursday task 1 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Thursday task 1"."<br>";
  }
}
if($th2 != ""){
$uth2 = $mysqli->query("UPDATE projData SET thursdayTask2 = '$th2' WHERE title = '$title'");
  if($uth2){
    echo "Thursday task 2 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Thursday task 2"."<br>";
  }
}
if($th3 != ""){
$uth3 = $mysqli->query("UPDATE projData SET thursdayTask3 = '$th3' WHERE title = '$title'");
  if($uth3){
    echo "Thursday task 3 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Thursday task 3"."<br>";
  }
}
if($f1 != ""){
$uf1 = $mysqli->query("UPDATE projData SET fridayTask1 = '$f1' WHERE title = '$title'");
  if($uf1){
    echo "Friday task 1 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Friday task 1"."<br>";
  }
}
if($f2 != ""){
$uf2 = $mysqli->query("UPDATE projData SET fridayTask2 = '$f2' WHERE title = '$title'");
  if($uf2){
    echo "Friday task 2 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Friday task 2"."<br>";
  }
}
if($f3 != ""){
$uf3 = $mysqli->query("UPDATE projData SET fridayTask3 = '$f3' WHERE title = '$title'");
  if($uf3){
    echo "Friday task 3 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Friday task 3"."<br>";
  }
}
if($sa1 != ""){
$usa1 = $mysqli->query("UPDATE projData SET saturdayTask1 = '$sa1' WHERE title = '$title'");
  if($usa1){
    echo "Saturday task 1 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Saturday task 1"."<br>";
  }
}
if($sa2 != ""){
$usa2 = $mysqli->query("UPDATE projData SET saturdayTask2 = '$sa2' WHERE title = '$title'");
  if($usa2){
    echo "Saturday task 2 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Saturday task 2"."<br>";
  }
}
if($sa3 != ""){
$usa3 = $mysqli->query("UPDATE projData SET saturdayTask3 = '$sa3' WHERE title = '$title'");
  if($usa3){
    echo "Saturday task 3 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Saturday task 3"."<br>";
  }
}
if($su1 != ""){
$usu1 = $mysqli->query("UPDATE projData SET sundayTask1 = '$su1' WHERE title = '$title'");
  if($usu1){
    echo "Sunday task 1 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Sunday task 1"."<br>";
  }
}
if($su2 != ""){
$usu2 = $mysqli->query("UPDATE projData SET sundayTask2 = '$su2' WHERE title = '$title'");
if($usu2){
  echo "Sunday task 2 successfully edited"."<br>";
}
else{
  echo "Unable to edit Sunday task 2"."<br>";
}
}
if($su3 != ""){
$usu3 = $mysqli->query("UPDATE projData SET sundayTask3 = '$su3' WHERE title = '$title'");
  if($usu3){
    echo "Sunday task 3 successfully edited"."<br>";
  }
  else{
    echo "Unable to edit Sunday task 3"."<br>";
  }
}
$mysqli->close();

echo "<br>"."<a href='logout.php'>".'Click to logout.'."</a>";
echo "<br>"."<a href='userLists.php'>".'Click to edit your lists.'."</a>";
?>
