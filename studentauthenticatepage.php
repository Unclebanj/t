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
      function resetpassword(){
       window.location.href ='password.php';
	  }
      
      </script>
	 </head>
	 <body>
         <div class = "sauthenticate_header">
	       <img src = "images/logo.jpg" alt = "logo" style = "height:100px;"/>
             <br>
	      <h5 style = "font-size:25px;font-family:Calbri; text-align:center; color:white;" >Student Authentication</h5>
         </div>
             <nav>
	             <ul>
	              <li><a href ="home.php">Home</a></li> 
	               <li><a href = "contact.php">Contact Us</a></li>   
	           </ul>
         </nav>
            
	    <div class = "sauthenticate_container">
   <form action ="studentlogin.php" method= "post"> 
      <br><br>
       <p>Username: <br> <input type="text" name="username" required/></p>
         <p>Password: <br> <input type="password" name="password" required/></p>
           <p><input type="submit" name = "submit" value="Login" /></p>
       <h5 style ="text-align:center; margin:50px;" onclick="resetpassword()">Forgot Password</h5>
      <?= (isset($_GET['message'])) ? $_GET['message'] : ""; ?>
    </form>
</div>   
</body>
</html>