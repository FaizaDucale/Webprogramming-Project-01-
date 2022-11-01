<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "style.css" />
<h1> Game Board </h1>
</head>

<style>
body {
  background-image: url('jeopback.jpg');
}
</style>
<?php
$sum=0;
if(isset($_POST['minus'])){
  $sum=$_POST['sum'];
  $sum--;
}

if(isset($_POST['add'])){
  $sum=$_POST['sum'];
  $sum++;
}
?>
<!doctype html>
<html>
  <head>
  </head>
  <body>
    <form method="POST" action="">
      <input type="submit" name="minus" value="Decrease"/> 
      <input type="text" name="sum" value="<?=$sum;?>" size="1"/> 
      <input type="submit" name="add" value="Increase"/>
    </form>
  </body>
</html>
<?php

  session_start(); 
  $questions=$_SESSION["questions"]; 
  $answered=$_SESSION["answered"]; 
  
?>
<div class="container">
  <div class="row">
    <?php
      for($i=0;$i<5;$i++){
        echo '<div class="square"><p class="category">'.$questions[$i][0].'</p></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=5;$i<10;$i++){
        if($answered[$i-5][1]==0)
          echo '<div class="square"><a href="question.php?id='.($i-5).'-1">$100</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=10;$i<15;$i++){
        if($answered[$i-10][2]==0)
          echo '<div class="square"><a href="question.php?id='.($i-10).'-2">$200</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=15;$i<20;$i++){
        if($answered[$i-15][3]==0)
          echo '<div class="square"><a href="question.php?id='.($i-15).'-3">$300</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=20;$i<25;$i++){
        if($answered[$i-25][4]==0)
          echo '<div class="square"><a href="question.php?id='.($i-20).'-4">$400</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
 
</div>
</html>
