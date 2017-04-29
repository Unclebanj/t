<!doctype html>
<html>
<head>
   
 <script type = "text/javascript">
	 
	  </script>
</head>
<body>
<img src = "images/logo.jpg" alt = "logo" style = "height:10%; margin:10px;"/>
<h4 style = "text-align:center;">KU TALENT</h4>
    <hr>
 <div class ="reset_password">
<form action = "resetpassword.php" method ="post">
    New Password
    <input type="password" name="password"  placeholder = "Enter New Password"required/>
    <p><input type="submit" name = "submit" value="Submit" onlclick="hidden"/></p>
    </form>
     
     <?php
session_start();
require_once 'connection.php';
     
if(isset($_POST['password'])){
$pass = $_POST['password'];

$password = sha1($pass);

 
}
if(isset($_POST['submit'])){

    $sql= "UPDATE student SET Passwords ='$password' where Username = '{$_SESSION['username']}';";
    
    if ($conn->query($sql)===true) {
     echo '<div style= "color:green";>';
    echo "Your password has been changed successfully <a href='sauthenticate.php'>Login</a>";
         echo '</div>';
    }
    else{
       echo '<div style= "color:red";>'; 
       echo "There was an error whiles resetting your password"; 
    echo '</div>';
    }

  }
     ?>
    </div>
</body>
</html>