
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet">
	 
	 <script>
	 function contact(){
	alert('TEL: 0208 485 1452\n\nEmail: kutalent@kingston.ac.uk');
	 }
	 </script>
	 
	 </head>
	 <body>
	 <img src = "images/logo.jpg" alt = "logo" style = "height:100px;"/>
	 <h5 style = "font-size:20px;font-family:arial; text-align:center;">Employer Login</h5>
	 <hr>
         <nav>
	             <ul>
	              <li><a href ="accesslogin.php">Back</a></li> 
	           </ul>
         </nav>
         <div class = "erow">
             <div class ="three">
	 <div class = "empauthenticate_container">
  <form method ="post" action="emplogin.php"> 
<p>Username: <br> <input type="text" name="username" style = "margin:10px;" /></p>
<p>Password: <br> <input type="password" name="password" style = "margin:10px;"/></p>
<p><input type="submit" value="Login" onclick ="welcome()"/> </p>
      <p onclick="contact()">Contact KU Talent</p>
<!--<input type="hidden" name="dcode" value= "credentials" />-->
        <?= (isset($_GET['message'])) ? $_GET['message'] : ""; ?>
</form>
	 </div>
             </div>
        <div id="nine">
		 <img src = "images/employer.jpg" alt = "logo" style="position:absolute;bottom:10em; left:40em;"/>
	</div>
         </div>
	 </body>
	 </html>
	 
	 <!--form method="POST" action= "controller.php" DONT FORGET>-->
	 <!--INPUT TYPE IS SUBMIT INSTEAD OF BUTTON-->