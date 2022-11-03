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


  
<div class="register-form">
  <span id="user-icon"><img src="usericon.jpg"></span>
      <form action="register-submit.php" method="get">
        
        <input type="text" name="username" maxlength="30" size="25" placeholder="Your Username" title="start with a lowercase character, end with a number"required>
        <br>
        
        <input type="password" name="password" maxlength="15" size="25" placeholder="Your Password (Range: 6-15)" title="make it unique" required>
        <br>
        
        <input type="text" name="name" maxlength="20" size="25" required placeholder="Your Full Name" title="First Name, Last Name" required>
        <br>
        
        <button id="back-button">Back</button>
        <input type="submit" value="Register">
      </form>
</div>
  
  
</body>
</html>
