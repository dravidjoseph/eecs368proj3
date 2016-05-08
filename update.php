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

$um1 = $mysqli->query("UPDATE projData SET 'mondayTask1' = '$m1' WHERE 'title' = '$title'");
$um2 = $mysqli->query("UPDATE projData SET 'mondayTask2' = '$m2' WHERE 'title' = '$title'");
$um3 = $mysqli->query("UPDATE projData SET 'mondayTask3' = '$m3' WHERE 'title' = '$title'");
$utu1 = $mysqli->query("UPDATE projData SET 'tuesdayTask1' = '$tu1' WHERE 'title' = '$title'");
$utu2 = $mysqli->query("UPDATE projData SET 'tuesdayTask2' = '$tu2' WHERE 'title' = '$title'");
$utu3 = $mysqli->query("UPDATE projData SET 'tuesdayTask3' = '$tu3' WHERE 'title' = '$title'");
$uw1 = $mysqli->query("UPDATE projData SET 'wednesdayTask1' = '$w1' WHERE 'title' = '$title'");
$uw2 = $mysqli->query("UPDATE projData SET 'wednesdayTask2' = '$w2' WHERE 'title' = '$title'");
$uw3 = $mysqli->query("UPDATE projData SET 'wednesdayTask3' = '$w3' WHERE 'title' = '$title'");
$uth1 = $mysqli->query("UPDATE projData SET 'thursdayTask1' = '$th1' WHERE 'title' = '$title'");
$uth2 = $mysqli->query("UPDATE projData SET 'thursdayTask2' = '$th2' WHERE 'title' = '$title'");
$uth3 = $mysqli->query("UPDATE projData SET 'thursdayTask3' = '$th3' WHERE 'title' = '$title'");
$uw1 = $mysqli->query("UPDATE projData SET 'wednesdayTask1' = '$w1' WHERE 'title' = '$title'");
$uw2 = $mysqli->query("UPDATE projData SET 'wednesdayTask2' = '$w2' WHERE 'title' = '$title'");
$uw3 = $mysqli->query("UPDATE projData SET 'wednesdayTask3' = '$w3' WHERE 'title' = '$title'");
?>
