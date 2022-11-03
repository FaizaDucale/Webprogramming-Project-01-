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
<div class="Questions">
  <?php
  include 'common.php';
  if(isset($_GET["Question"])){
  $question = $_GET["Question"];
  openQuestion($question);
  $_SESSION["answered"] = viewedQuestions($question, $_SESSION["answered"]);
  }
  ?>
  <form action="Board.php">
  <input type="text" name = "Answer">
  <input type="submit" value="Return">
  </form>
  </div>
  </body>
</html>
