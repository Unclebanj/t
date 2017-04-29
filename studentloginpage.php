<?php
session_start();
require_once('uploadconnect.php');
  
 $user =$_POST['username'];
 $pass = mysql_real_escape_string($_POST['password']);


$pass = sha1($pass);

$error = [];// setting an array for errors
    
 if(isset($user) && isset($pass)){
   session_unset($user);    
  session_unset($pass);
}
     
    if (empty($user)){
     $error[]= "Please Enter Your Username"; 
     }
    if(empty ($pass)){
        $error[]= "Please Enter Password";
    }

  
 if(empty($error)){   
      $loginsql = "SELECT * FROM student WHERE Username ='$user' and Passwords = '$pass' "; 
      
     
      $data = $conn->query($loginsql);
      $rows = $data->num_rows;
    
     if($rows == 1){
         $db = $data->fetch_array(MYSQLI_ASSOC);
         
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
         
         
        $_SESSION['id']= $db['StudentID'];
        $_SESSION['fname'] = $db['Firstname'];
        $_SESSION['lname'] = $db['Lastname'];
        $_SESSION['level'] = $db['Accesslevel'];
         
         
        header('Location:welcome.php');
  }
   else {
    
     header('Location: sauthenticate.php?message=Username_AND_Password_Invalid');
     }
    }
?>