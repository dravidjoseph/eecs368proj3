<?php
session_start();
include('config.php');

$username = $_SESSION['login_user'];
$title = $_GET['Title'];

$someVar = $mysqli->query("UPDATE projData SET 'mondayTask1' = 'val' WHERE 'title' = 'val'");


?>
