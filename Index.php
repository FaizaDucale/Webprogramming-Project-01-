<?php 
include 'common.php';
session_start();
$_SESSION["answered"] = array
  (
  array("Question 1"=> true, "Question 2"=> true, "Question 3"=> true),
  array("Question 4"=> true, "Question 5"=> true, "Question 6"=> true),
  array("Question 7"=> true, "Question 8"=> true, "Question 9"=> true)
);
$_SESSION["categories"] = array("Math", "Science", "Technology");
$_SESSION["Score"] = 0;
$_SESSION["UserInfo"] = array("", "", "");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jeopardy!</title>
<link href="gamestyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
</head>
<body>
  <div id="heading">
    <h1> WELCOME TO JEOPARDY! </h1>
    <button><a href="register.php">Register for a new account</a></button>
    <button><a href="login.php">Sign in to start playing</a></button><br>
    <button><a href="leaderboard.php">View Leaderboard</a></button>  
</div>
  </body>
</html>
