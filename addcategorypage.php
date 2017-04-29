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
     <link href="style.css" rel="stylesheet">
	 
	 </head>
	 <body>
         
     <?php
     include 'header.php';
     ?>
		<div class = "category">
		<nav>
		<ul>
		<li><a href = "welcome.php">Home</a></li>
        <li><a href = "help.php">Help</a></li>
		</ul>
		</nav>
		</div>
         <h3 style="text-align:center;">New Job Category</h3>
		<hr>
		<div class = "category_container">
		<form method ="post" action="categorydb.php">
		Category ID
		<input type = "text" name = "cid" placeholder = "Enter ID" required/>
		<br>
		Category Name
			<input type = "text" name = "catname" placeholder = "Enter Category Name" required/>
			<br>
			<input type = "submit" value = "ADD" name = "register" />
		</form>
		</div>
         <br>
          <table style="width:900px; margin-left:15em; border:1px solid;">
	 <tr>
	 <th style="background-color:silver;">Scheme Categories For Students</th>
              </tr>
              <tr>
              <td>KU continue to introduce categories relating to all courses out students partake within the University. These will provide students with a more fast track to submitting a CV according to their preferred placement choice.</td>
              </tr>
	 </table>
         <br>
      <footer style="text-align:center;">KU Talent@kingston.ac.uk</footer>
		</body>
		</html>