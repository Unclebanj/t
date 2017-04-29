<?php
session_start();
require_once 'connection.php';

if(!isset($_SESSION['username'])){
header('Location:accesslogin.php');
}
?>
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
	    <div class = "edit_form">
    
	<form name="registry" method = "post" action = "editdb.php">
    <input type = "hidden" name = "id" required/>                                                
	Firstname
	<input type = "text" name = "first" required/>
    <br/>
	Lastname
	<input type = "text" name = "last"  required/> 
	<br/>
    Address
	<input type = "textarea" name = "address" required/>
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
	<input type = "submit" value = "Update" name = "register" />
	</form>
	</div>
              
	</div>
   <footer>KU Talent 2017</footer>
	</body>
	</html>
	
	
	
	