<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KU Talent CV Website</title>
    <link href = "maincssstyle.css" rel="stylesheet" type = "text/css">
      
	</head>
	
	<body>
        <?php
         include 'header.php';
        ?>
	      <div class = "register_container">
	    <div class = "register_form">
            <a href = "welcome.php">Home</a>
      <h3> KU Talent Registeration</h3>
	<hr>
            
	<form name="registry" method = "post" action = "studentdb.php">
	ID Number
	<input type = "text" name= "id" placeholder= "Enter ID without K"required/>
        <!--<span class="message"><?php echo $firsterr ?></span>-->
     <br/>
	Firstname
	<input type = "text" name = "first" required/>
    <br/>
	Lastname
	<input type = "text" name = "last"  required/> 
	<br/>
    Address
	<input type = "textarea" name = "address" style ="height:50px; width:300px;" required/>
    <br/>
	Email 
	<input type = "text" name = "email" required/>
    <br>
    Phone 
	<input type = "text" name = "phone" required/>
    <br>
    Job Title
	<input type = "text" name = "title" placeholder = "Not referred to Students"/>
    <br>
	Username
	<input type = "text" name = "username" required/>
	Password
	<input type = "password" name = "password" required/>
    <br>
    Access Level
    <input type="text" name = "level" required/>
	<br/><br/>
        <input type="radio" name ="scheck" value="student" checked/>Student
          <input type="radio" name ="scheck" value="kustaff"checked />KU Staff
          <input type="radio" name ="scheck" value="employer" checked/>Employer
        
        <br/><br/>
	<input type = "submit" value = "Register" name = "register" />
	</form>
	</div>
	</div>
   <footer>Kingston University 2017</footer>
	</body>
	</html>
	
	
	
	