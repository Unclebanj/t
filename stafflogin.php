<?php
require_once('connection.php');
  if(isset($_POST['username'])){
 $user =$_POST['username'];
  }
if(isset($_POST['password'])){
 $pass = mysql_real_escape_string($_POST['password']);

$error = [];// setting an array for errors

$pass = sha1($pass);

}
 if(isset($user) && isset($pass)){
   session_unset($user);    
 session_unset($pass);
}
    if(empty($user)){
     $error[]= "Please Enter Your Username"; 
     }

    if(empty ($pass)){
        $error[]= "Please Enter Password";
    }
  
if(empty($error)){ 
      $sql = "SELECT * FROM kustaff WHERE Username ='$user' and Passwords = '$pass' ";
    
      $d = $conn->query($sql);
      $row = $d->num_rows;
    
     if($row == 1){
    $db = $d->fetch_array(MYSQLI_ASSOC);
        // var_dump($db);
         
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
         
        
        $_SESSION['id']= $db['StaffID'];
        $_SESSION['fname'] = $db['Firstname'];
        $_SESSION['lname'] = $db['Lastname'];
        $_SESSION['level'] = $db['Accesslevel'];
        $_SESSION['job'] =   $db['Jobtitle'];
         
        header('Location:welcome.php');
     }
    else 
      {
     header('Location: authenticate.php?message=Username_AND_Password_Invalid');
     }   
   }
    
?>

