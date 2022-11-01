<?php
$_REQUEST['id'];
$cat=substr($_REQUEST['id'],0,1);
$question=substr($_REQUEST['id'],2,1);
session_start(); 
$questions=$_SESSION["questions"];
$dash=strpos($questions[$cat][$question]," - ");
$q=substr($questions[$cat][$question],0,$dash);
?>
<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "card.css" />
</head>
<?php
    echo '<a href="answer.php?id='.$_REQUEST['id'].'">'.$q.'</a>';
   
?>
</html>
