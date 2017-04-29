
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
     <link href="maincssstyle.css" rel="stylesheet">
      <script>
      function clear(){
      document.getElementById('#pwd').value=" ";
      }
      
      </script>
	 </head>
	 <body>
	 <div class ="about_header"> 
	   <img src = "images/ku logo.jpg" alt = "logo"/>
        <h4> KU Talent</h4>
	   <nav>
	   <ul>
	    <li title = "Previous"><a href ="welcome.php">Back</a></li>
           <li title = "Home"><a href ="home.php">Home</a></li>
		  <li title = "Contacting KU Talent"><a href ="contact.php">Contact Us</a></li>
		   <li title = "Follow Us"><a href ="follow.php">Follow Us</a></li>
	   </ul>
         </nav>
	   </div>
	   <div class = "generate_container">
		<h1>Generate Employer Password</h1>
           <br>
		<hr>
		<div class = "form1">
		<form method="post" action="generatepassword.php">
          <?php
            
            if(!isset($_SESSION['passwd'])){
              $random = substr(sha1(rand()), 0, 15); 
            }
            
            ?>
        
         <input type ="text" id= "pwd" name ="passwd" value="<?php if($_POST){echo $random;} ?>"  readonly/>
            <p></p>
	      <input type ="submit" name="pass" value="GENERATE PASSWORD"/>
            <p></p>
            Expiry Date<br>
        <input type = "date" name ="expiry" placeholder = "Expiry Date">
            <p></p>
		<input type = "text" name ="emp" placeholder = "Employer Name">
        <input type ="submit" name="submit"  id="send" value="SEND" onclick="clear()"/>
		
            <?php
            if(isset($_POST['expiry'])){
    
               $expiry = $_POST['expiry'];
              }
              if(isset($_POST['emp'])){
    
               $empname = $_POST['emp'];
              }
            if(isset($_POST['submit'])){

            $pass = "UPDATE employerpermission inner join employer
            ON employerpermission.EmployerID = employer.EmployerID
            set Employerpassword ='{$_POST['passwd']}', Expirydate='{$_POST['expiry']}' WHERE employer.Employername ='{$_POST['emp']}';";
    
         $emppass = $conn->query($pass);
         if($emppass === true){
        print '<br>';
        print '<div style = color:green;margin:1em;>';
        print 'Password has been successfully sent to Employer';
        print '</div>';
       }
     }
     ?>     
		</form>
		</div>
		</div>
         <div class ="drow6">
	     <footer style ="color:black;">Kingston University  www.kingston.ac.uk   2017</footer>
         </div>
		</body>
		</html>