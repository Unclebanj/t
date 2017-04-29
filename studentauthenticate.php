<?php
session_start();
require_once 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet">
      
      <script>
       function staffreset(){
         window.location.href ='staffpassword.php';
	  }
      </script>
	 
	 </head>
	 <body>
         <div class = "authenticate_header">
	 <img src = "logo.jpg" alt = "logo" style = "height:100px;"/>
	 <h5 style = "font-size:20px;font-family:arial; text-align:center; color:white;" >KU Staff Authentication</h5>
             <hr>
         </div>
          <nav>
	 <ul>
	  <li><a href ="home.php">Home</a></li>
	   <li><a href ="">News</a></li>	   
	 </ul>
	 </nav>
	 
	 <div class = "authenticate_container">
  <form action ="login.php" method= "post"> 
      <br><br>
<p>Username: <br> <input type="text" name="username" placeholder = "username" required/>
<p>Password: <br> <input type="password" name="password"placeholder="password" required/></p>
      <p><input type="submit" name = "submit" value="Login" /></p>
<h5 style ="text-align:center; margin:50px;" onclick="staffreset()">Forgot Password</h5>
       <?= (isset($_GET['message'])) ? $_GET['message'] : ""; ?>
</form>
	 </div><div class="side">
         <h3>Service Desk</h3>
          <strong>Telephone</strong> <em>+44 (0)20 8417 3355<br />
          Monday to Friday 8am-6:30pm</em>
         </div>
	 </body>
	 </html>