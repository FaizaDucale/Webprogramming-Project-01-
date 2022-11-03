<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jeopardy!</title>
<link href="gamestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
  <form action="Board-Submit.php" method="get">
<?php
  include 'common.php';
    buildBoard($_SESSION["answered"], $_SESSION["categories"]);


?>
   <br>
   <div class = "score">
        <?php
       if(isset($_GET["Answer"])){
       $answer = $_GET["Answer"];

       if(checkAnswer($answer)){
        $_SESSION["Score"] = $_SESSION["Score"] + 200;
        echo "<p class = 'answer'> CORRECT ANSWER!</p>";
       }
       else{
        $_SESSION["Score"] = $_SESSION["Score"] - 200;
        echo "<p class = 'answer'> INCORRECT ANSWER!</p>";
       }
      

       }  echo "<br>";
          echo $_SESSION["Score"]; 
          if(isBoardCleared($_SESSION["answered"])){
            echo "<p style = 'font-size = 20pt;'>GAME OVER</p>";
            updateLeaderBoard($_SESSION["UserInfo"][2], $_SESSION["Score"]);
          }

        ?>
   </div>
 </form>
<button class = "RestartButton"><a href="index.php">Return to Main Menu</a></button>  

  </body>
</html>
