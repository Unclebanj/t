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
<form action = "password.php" method ="post">
    <input type="text" name="username" id="use" placeholder = "Enter Username"required/>
    <p><input type="submit" name = "submit" value="Send" onlclick="hidden"/></p>
    <h5><a href="">Forgot Username</a></h5>
    </form>
     
     <?php
session_start();
require_once 'connection.php';
     
     if(isset($_POST['username'])){
       $username = $_POST['username']; 
     }
  if(isset($_POST['submit'])){
  $user = "SELECT * from student where Username = '$username';";
    
    $reset= $conn->query($user);
    $row = $reset->num_rows;
    if($row == 1){
    $db = $reset->fetch_array(MYSQLI_ASSOC);
     $_SESSION['username'] = $username;  
 
      header('Location:resetpassword.php');    
    }
      else{
          echo 'Username Is Not Recognised. Try Again';
      }

  }

?>
    </div>
</body>
</html>