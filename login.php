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
<h1> Login now </h1>
 <div id="home-login"> 
   <form action="loginhome.php" method="get">       
        <input type="text" name="username" maxlength="30" size="25" placeholder="Username" required>
        <br>
        
        <input type="password" name="password" maxlength="15" size="25" placeholder="Password"  required>
        <br>
   
        <button id="back-button">Back</button>
        <input type="submit" value="Login">
      </form>
  </div>
  
  </body>
</html>
