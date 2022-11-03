<?php 
session_start();
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
 <div class = "leaderboard">
    <?php
    include "common.php";
    readLeaderBoard(); 
    ?>
 </div>
 <button><a href="index.php">Return to Main Menu</a></button>
  </body>
</html>
